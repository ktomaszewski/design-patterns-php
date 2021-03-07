<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

final class WindowsGuiCheckbox implements GuiCheckboxInterface
{
    public function getLabel(): string
    {
        return 'Windows GUI checkbox';
    }
}
