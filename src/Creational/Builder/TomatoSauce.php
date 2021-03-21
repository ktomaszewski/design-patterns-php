<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class TomatoSauce implements SauceInterface
{
    public function getName(): string
    {
        return 'Tomato sauce';
    }

    public function getColorName(): string
    {
        return 'Red';
    }
}
