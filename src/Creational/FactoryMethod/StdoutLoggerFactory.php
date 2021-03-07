<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\FactoryMethod;

final class StdoutLoggerFactory implements LoggerFactoryInterface
{
    public function create(): LoggerInterface
    {
        return new StdoutLogger();
    }
}
