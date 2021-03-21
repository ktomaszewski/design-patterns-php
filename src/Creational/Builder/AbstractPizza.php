<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Builder;

abstract class AbstractPizza
{
    /** @var IngredientInterface[] */
    private array $ingredients = [];

    /** @var SauceInterface[] */
    private array $sauces = [];

    final public function addIngredient(IngredientInterface $ingredient): static
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /** @return IngredientInterface[] */
    final public function getIngredients(): array
    {
        return $this->ingredients;
    }

    final public function addSauce(SauceInterface $sauce): static
    {
        $this->sauces[] = $sauce;

        return $this;
    }

    /** @return SauceInterface[] */
    final public function getSauces(): array
    {
        return $this->sauces;
    }
}
