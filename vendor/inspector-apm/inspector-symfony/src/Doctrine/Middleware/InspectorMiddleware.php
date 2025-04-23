<?php

namespace Inspector\Symfony\Bundle\Doctrine\Middleware;

use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\Middleware as MiddlewareInterface;
use Inspector\Inspector;
use Inspector\Symfony\Bundle\Doctrine\Middleware\InspectorSQLSegmentTracer;
use Inspector\Symfony\Bundle\Doctrine\Middleware\InspectorDriver;

class InspectorMiddleware implements MiddlewareInterface
{
    /** @var InspectorSQLSegmentTracer */
    protected $inspectorSQLSegmentTracer;

    /**
     * InspectorMiddleware constructor.
     *
     * @param Inspector $inspector
     * @param array     $configuration
     * @param string    $connectionName
     */
    public function __construct(
        Inspector $inspector,
        array $configuration,
        string $connectionName
    ) {
        $this->inspectorSQLSegmentTracer = new InspectorSQLSegmentTracer(
            $inspector,
            $configuration,
            $connectionName
        );
    }

    public function wrap(DriverInterface $driver): DriverInterface
    {
        return new InspectorDriver(
            $driver,
            $this->inspectorSQLSegmentTracer
        );
    }
}
