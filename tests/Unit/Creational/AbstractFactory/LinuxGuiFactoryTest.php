<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\AbstractFactory;

use DesignPatternsPhp\Creational\AbstractFactory\LinuxGuiButton;
use DesignPatternsPhp\Creational\AbstractFactory\LinuxGuiCheckbox;
use DesignPatternsPhp\Creational\AbstractFactory\LinuxGuiFactory;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\AbstractFactory\LinuxGuiFactory */
final class LinuxGuiFactoryTest extends TestCase
{
    private function createLinuxGuiFactory(): LinuxGuiFactory
    {
        return new LinuxGuiFactory();
    }

    public function testLinuxGuiButtonCanBeCreated(): void
    {
        // given
        $linuxGuiFactory = $this->createLinuxGuiFactory();

        // when
        $guiButton = $linuxGuiFactory->createGuiButton();

        // then
        Assert::assertInstanceOf(LinuxGuiButton::class, $guiButton);
    }

    public function testLinuxGuiCheckboxCanBeCreated(): void
    {
        // given
        $linuxGuiFactory = $this->createLinuxGuiFactory();

        // when
        $guiCheckbox = $linuxGuiFactory->createGuiCheckbox();

        // then
        Assert::assertInstanceOf(LinuxGuiCheckbox::class, $guiCheckbox);
    }
}
