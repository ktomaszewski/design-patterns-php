<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Prototype;

interface PrototypeInterface
{
    public function __clone(): void;
}
