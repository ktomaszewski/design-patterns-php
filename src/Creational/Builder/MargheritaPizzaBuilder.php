<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class MargheritaPizzaBuilder implements PizzaBuilderInterface
{
    private MargheritaPizza $margheritaPizza;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): PizzaBuilderInterface
    {
        $this->margheritaPizza = new MargheritaPizza();

        return $this;
    }

    public function addIngredients(): PizzaBuilderInterface
    {
        $this->margheritaPizza->addIngredient(new Mozzarella());

        return $this;
    }

    public function addSauces(): PizzaBuilderInterface
    {
        $this->margheritaPizza->addSauce(new TomatoSauce());

        return $this;
    }

    public function build(): AbstractPizza
    {
        return $this->margheritaPizza;
    }

}
