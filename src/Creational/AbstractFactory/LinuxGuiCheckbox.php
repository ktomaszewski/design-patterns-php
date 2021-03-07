<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

final class LinuxGuiCheckbox implements GuiCheckboxInterface
{
    public function getLabel(): string
    {
        return 'Linux GUI checkbox';
    }
}
