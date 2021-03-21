<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

final class SalamiPizzaBuilder implements PizzaBuilderInterface
{
    private SalamiPizza $salamiPizza;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): PizzaBuilderInterface
    {
        $this->salamiPizza = new SalamiPizza();

        return $this;
    }

    public function addIngredients(): PizzaBuilderInterface
    {
        $this->salamiPizza
            ->addIngredient(new Mozzarella())
            ->addIngredient(new Salami());

        return $this;
    }

    public function addSauces(): PizzaBuilderInterface
    {
        $this->salamiPizza->addSauce(new TomatoSauce());

        return $this;
    }

    public function build(): AbstractPizza
    {
        return $this->salamiPizza;
    }

}
