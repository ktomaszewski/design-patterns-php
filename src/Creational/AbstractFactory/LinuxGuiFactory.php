<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

final class LinuxGuiFactory implements GuiFactory
{
    public function createGuiButton(): GuiButtonInterface
    {
        return new LinuxGuiButton();
    }

    public function createGuiCheckbox(): GuiCheckboxInterface
    {
        return new LinuxGuiCheckbox();
    }
}
