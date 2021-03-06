<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\Singleton;

use LogicException;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function serialize;
use function unserialize;

/** @covers \DesignPatternsPhp\Creational\Singleton\SingletonTrait */
final class SingletonTraitTest extends TestCase
{
    public function testConstructorIsPrivate(): void
    {
        // given
        $singletonReflection = new ReflectionClass(Singleton::class);

        // then
        Assert::assertTrue($singletonReflection->getConstructor()->isPrivate());
    }

    public function testCannotBeCloned(): void
    {
        // given
        $singleton = Singleton::getInstance();

        // expect
        $this->expectException(LogicException::class);

        // when
        /** @noinspection PhpExpressionResultUnusedInspection */
        clone $singleton;
    }

    public function testCannotBeUnserialized(): void
    {
        // given
        $singleton = Singleton::getInstance();

        // expect
        $this->expectException(LogicException::class);

        // when
        unserialize(serialize($singleton));
    }

    public function testOnlyOneInstanceCanBeCreated(): void
    {
        // given
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();

        // then
        Assert::assertSame($singleton1, $singleton2);
    }
}
