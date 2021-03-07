<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\FactoryMethod;

use DesignPatternsPhp\Creational\FactoryMethod\StdoutLogger;
use DesignPatternsPhp\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\FactoryMethod\StdoutLoggerFactory */
final class StdoutLoggerFactoryTest extends TestCase
{
    private function createStdoutLoggerFactory(): StdoutLoggerFactory
    {
        return new StdoutLoggerFactory();
    }

    public function testStdoutLoggerCanBeCreated(): void
    {
        // given
        $stdoutLoggerFactory = $this->createStdoutLoggerFactory();

        // when
        $stdoutLogger = $stdoutLoggerFactory->create();

        // then
        Assert::assertInstanceOf(StdoutLogger::class, $stdoutLogger);
    }
}
