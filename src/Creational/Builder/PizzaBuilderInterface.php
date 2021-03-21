<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

interface PizzaBuilderInterface
{
    public function reset(): self;

    public function addIngredients(): self;

    public function addSauces(): self;

    public function build(): AbstractPizza;
}
