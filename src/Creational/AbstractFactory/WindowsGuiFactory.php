<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

final class WindowsGuiFactory implements GuiFactory
{
    public function createGuiButton(): GuiButtonInterface
    {
        return new WindowsGuiButton();
    }

    public function createGuiCheckbox(): GuiCheckboxInterface
    {
        return new WindowsGuiCheckbox();
    }
}
