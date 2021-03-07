<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\FactoryMethod;

final class FileLoggerFactory implements LoggerFactoryInterface
{
    public function __construct(private string $filePath)
    {
    }

    public function create(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}
