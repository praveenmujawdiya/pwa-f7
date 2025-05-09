<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Map;

use Symfony\UX\Map\Exception\InvalidArgumentException;

/**
 * Represents a map.
 *
 * @author Hugo Alliaume <hugo@alliau.me>
 */
final class Map
{
    private Markers $markers;
    private Polygons $polygons;
    private Polylines $polylines;

    /**
     * @param Marker[]   $markers
     * @param Polygon[]  $polygons
     * @param Polyline[] $polylines
     */
    public function __construct(
        private readonly ?string $rendererName = null,
        private ?MapOptionsInterface $options = null,
        private ?Point $center = null,
        private ?float $zoom = null,
        private bool $fitBoundsToMarkers = false,
        array $markers = [],
        array $polygons = [],
        array $polylines = [],
    ) {
        $this->markers = new Markers($markers);
        $this->polygons = new Polygons($polygons);
        $this->polylines = new Polylines($polylines);
    }

    public function getRendererName(): ?string
    {
        return $this->rendererName;
    }

    public function center(Point $center): self
    {
        $this->center = $center;

        return $this;
    }

    public function zoom(float $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    public function fitBoundsToMarkers(bool $enable = true): self
    {
        $this->fitBoundsToMarkers = $enable;

        return $this;
    }

    public function options(MapOptionsInterface $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(): ?MapOptionsInterface
    {
        return $this->options;
    }

    public function hasOptions(): bool
    {
        return null !== $this->options;
    }

    public function addMarker(Marker $marker): self
    {
        $this->markers->add($marker);

        return $this;
    }

    public function removeMarker(Marker|string $markerOrId): self
    {
        $this->markers->remove($markerOrId);

        return $this;
    }

    public function addPolygon(Polygon $polygon): self
    {
        $this->polygons->add($polygon);

        return $this;
    }

    public function removePolygon(Polygon|string $polygonOrId): self
    {
        $this->polygons->remove($polygonOrId);

        return $this;
    }

    public function addPolyline(Polyline $polyline): self
    {
        $this->polylines->add($polyline);

        return $this;
    }

    public function removePolyline(Polyline|string $polylineOrId): self
    {
        $this->polylines->remove($polylineOrId);

        return $this;
    }

    public function toArray(): array
    {
        if (!$this->fitBoundsToMarkers) {
            if (null === $this->center) {
                throw new InvalidArgumentException('The map "center" must be explicitly set when not enabling "fitBoundsToMarkers" feature.');
            }

            if (null === $this->zoom) {
                throw new InvalidArgumentException('The map "zoom" must be explicitly set when not enabling "fitBoundsToMarkers" feature.');
            }
        }

        return [
            'center' => $this->center?->toArray(),
            'zoom' => $this->zoom,
            'fitBoundsToMarkers' => $this->fitBoundsToMarkers,
            'options' => $this->options ? MapOptionsNormalizer::normalize($this->options) : [],
            'markers' => $this->markers->toArray(),
            'polygons' => $this->polygons->toArray(),
            'polylines' => $this->polylines->toArray(),
        ];
    }

    /**
     * @param array{
     *     center?: array{lat: float, lng: float},
     *     zoom?: float,
     *     markers?: list<array>,
     *     polygons?: list<array>,
     *     polylines?: list<array>,
     *     fitBoundsToMarkers?: bool,
     *     options?: array<string, mixed>,
     * } $map
     *
     * @internal
     */
    public static function fromArray(array $map): self
    {
        $map['fitBoundsToMarkers'] = true;

        if (isset($map['options'])) {
            $map['options'] = [] === $map['options'] ? null : MapOptionsNormalizer::denormalize($map['options']);
        }

        if (isset($map['center'])) {
            $map['center'] = Point::fromArray($map['center']);
        }

        if (isset($map['zoom']) || isset($map['center'])) {
            $map['fitBoundsToMarkers'] = false;
        }

        $map['markers'] ??= [];
        if (!\is_array($map['markers'])) {
            throw new InvalidArgumentException('The "markers" parameter must be an array.');
        }
        $map['markers'] = array_map(Marker::fromArray(...), $map['markers']);

        $map['polygons'] ??= [];
        if (!\is_array($map['polygons'])) {
            throw new InvalidArgumentException('The "polygons" parameter must be an array.');
        }
        $map['polygons'] = array_map(Polygon::fromArray(...), $map['polygons']);

        $map['polylines'] ??= [];
        if (!\is_array($map['polylines'])) {
            throw new InvalidArgumentException('The "polylines" parameter must be an array.');
        }
        $map['polylines'] = array_map(Polyline::fromArray(...), $map['polylines']);

        return new self(...$map);
    }
}
