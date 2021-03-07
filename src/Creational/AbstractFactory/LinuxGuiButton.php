<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\AbstractFactory;

final class LinuxGuiButton implements GuiButtonInterface
{
    public function getText(): string
    {
        return 'Linux GUI button';
    }
}
