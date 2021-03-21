<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class Mozzarella implements IngredientInterface
{
    public function getName(): string
    {
        return 'Mozzarella';
    }
}
