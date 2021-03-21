<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class PizzaBuilderDirector
{
    public function build(PizzaBuilderInterface $pizzaBuilder): AbstractPizza
    {
        return $pizzaBuilder
            ->reset()
            ->addSauces()
            ->addIngredients()
            ->build();
    }
}
