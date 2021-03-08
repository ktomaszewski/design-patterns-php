<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Prototype;

final class City
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
