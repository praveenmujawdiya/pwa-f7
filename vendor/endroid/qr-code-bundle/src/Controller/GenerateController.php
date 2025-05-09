<?php

declare(strict_types=1);

namespace Endroid\QrCodeBundle\Controller;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Builder\BuilderRegistryInterface;
use Endroid\QrCodeBundle\Response\QrCodeResponse;
use Symfony\Component\HttpFoundation\Response;

final readonly class GenerateController
{
    public function __construct(
        private BuilderRegistryInterface $builderRegistry,
    ) {
    }

    public function __invoke(string $builder, string $data): Response
    {
        $builder = $this->builderRegistry->get($builder);

        if (!$builder instanceof Builder) {
            throw new \Exception('This controller only handles Builder instances');
        }

        return new QrCodeResponse($builder->build(data: $data));
    }
}
