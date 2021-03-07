<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

interface GuiFactory
{
    public function createGuiButton(): GuiButtonInterface;

    public function createGuiCheckbox(): GuiCheckboxInterface;
}
