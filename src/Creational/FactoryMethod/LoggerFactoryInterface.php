<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\FactoryMethod;

interface LoggerFactoryInterface
{
    public function create(): LoggerInterface;
}
