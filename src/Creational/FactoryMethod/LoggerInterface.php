<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\FactoryMethod;

interface LoggerInterface
{
    public function log(string $message): void;
}
