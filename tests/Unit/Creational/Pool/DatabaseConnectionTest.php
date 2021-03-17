<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\Pool;

use DesignPatternsPhp\Creational\Pool\DatabaseConnectionPool;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\Pool\DatabaseConnectionPool */
final class DatabaseConnectionTest extends TestCase
{
    private function createDatabaseConnectionPool(): DatabaseConnectionPool
    {
        return new DatabaseConnectionPool();
    }

    public function testNewInstancesAreCreatedAsNeeded(): void
    {
        // given
        $databaseConnectionPool = $this->createDatabaseConnectionPool();

        // when
        $databaseConnection1 = $databaseConnectionPool->get();
        $databaseConnection2 = $databaseConnectionPool->get();

        // then
        Assert::assertNotSame($databaseConnection2, $databaseConnection1);
    }

    public function testSameInstanceCouldBeObtainedAfterRelease(): void
    {
        // given
        $databaseConnectionPool = $this->createDatabaseConnectionPool();

        // when
        $databaseConnection1 = $databaseConnectionPool->get();
        $databaseConnectionPool->release($databaseConnection1);
        $databaseConnection2 = $databaseConnectionPool->get();

        // then
        Assert::assertSame($databaseConnection2, $databaseConnection1);
    }
}
