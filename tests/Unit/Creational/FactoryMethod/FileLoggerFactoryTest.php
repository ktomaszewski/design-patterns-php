<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\FactoryMethod;

use DesignPatternsPhp\Creational\FactoryMethod\FileLogger;
use DesignPatternsPhp\Creational\FactoryMethod\FileLoggerFactory;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\FactoryMethod\FileLoggerFactory */
final class FileLoggerFactoryTest extends TestCase
{
    private function createFileLoggerFactory(): FileLoggerFactory
    {
        return new FileLoggerFactory(__FILE__);
    }

    public function testFileLoggerCanBeCreated(): void
    {
        // given
        $fileLoggerFactory = $this->createFileLoggerFactory();

        // when
        $fileLogger = $fileLoggerFactory->create();

        // then
        Assert::assertInstanceOf(FileLogger::class, $fileLogger);
    }
}
