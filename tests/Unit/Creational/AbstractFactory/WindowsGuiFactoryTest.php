<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\AbstractFactory;

use DesignPatternsPhp\Creational\AbstractFactory\WindowsGuiButton;
use DesignPatternsPhp\Creational\AbstractFactory\WindowsGuiCheckbox;
use DesignPatternsPhp\Creational\AbstractFactory\WindowsGuiFactory;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\AbstractFactory\WindowsGuiFactory */
final class WindowsGuiFactoryTest extends TestCase
{
    private function createWindowsGuiFactory(): WindowsGuiFactory
    {
        return new WindowsGuiFactory();
    }

    public function testWindowsGuiButtonCanBeCreated(): void
    {
        // given
        $windowsGuiFactory = $this->createWindowsGuiFactory();

        // when
        $guiButton = $windowsGuiFactory->createGuiButton();

        // then
        Assert::assertInstanceOf(WindowsGuiButton::class, $guiButton);
    }

    public function testWindowsGuiCheckboxCanBeCreated(): void
    {
        // given
        $windowsGuiFactory = $this->createWindowsGuiFactory();

        // when
        $guiCheckbox = $windowsGuiFactory->createGuiCheckbox();

        // then
        Assert::assertInstanceOf(WindowsGuiCheckbox::class, $guiCheckbox);
    }
}
