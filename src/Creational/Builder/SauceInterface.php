<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

interface SauceInterface
{
    public function getName(): string;

    public function getColorName(): string;
}
