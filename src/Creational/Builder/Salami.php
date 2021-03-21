<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class Salami implements IngredientInterface
{
    public function getName(): string
    {
        return 'Salami';
    }
}
