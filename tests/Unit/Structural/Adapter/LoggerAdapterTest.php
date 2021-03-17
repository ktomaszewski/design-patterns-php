<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Structural\Adapter;

use DesignPatternsPhp\Structural\Adapter\ExternalLogger;
use DesignPatternsPhp\Structural\Adapter\LoggerAdapter;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;
use Prophecy\Prophecy\ObjectProphecy;

/** @covers \DesignPatternsPhp\Structural\Adapter\LoggerAdapter */
final class LoggerAdapterTest extends TestCase
{
    use ProphecyTrait;

    private const LOG_MESSAGE = 'message';

    private ObjectProphecy|ExternalLogger $externalLoggerMock;

    protected function setUp(): void
    {
        $this->externalLoggerMock = $this->prophesize(ExternalLogger::class);
    }

    private function createLoggerAdapter(): LoggerAdapter
    {
        return new LoggerAdapter($this->externalLoggerMock->reveal());
    }

    public function testAdapterCanUseExternalLogger(): void
    {
        // given
        $externalLoggerLogMessageMock = $this->externalLoggerMock->logMessage(self::LOG_MESSAGE);
        $loggerAdapter = $this->createLoggerAdapter();

        // when
        $loggerAdapter->log(self::LOG_MESSAGE);

        // then
        $externalLoggerLogMessageMock->shouldBeCalledOnce();
    }
}
