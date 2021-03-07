<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

final class WindowsGuiButton implements GuiButtonInterface
{
    public function getText(): string
    {
        return 'Windows GUI button';
    }
}
