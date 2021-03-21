<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class GarlicSauce implements SauceInterface
{
    public function getName(): string
    {
        return 'Garlic sauce';
    }

    public function getColorName(): string
    {
        return 'White';
    }
}
