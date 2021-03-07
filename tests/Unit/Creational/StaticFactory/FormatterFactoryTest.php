<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\StaticFactory;

use DesignPatternsPhp\Creational\StaticFactory\FloatFormatter;
use DesignPatternsPhp\Creational\StaticFactory\FormatterFactory;
use DesignPatternsPhp\Creational\StaticFactory\IntegerFormatter;
use DesignPatternsPhp\Creational\StaticFactory\StringFormatter;
use DomainException;
use Generator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/** @covers \DesignPatternsPhp\Creational\StaticFactory\FormatterFactory */
final class FormatterFactoryTest extends TestCase
{
    public function testConstructorIsPrivate(): void
    {
        // given
        $formatterFactoryReflection = new ReflectionClass(FormatterFactory::class);

        // then
        Assert::assertTrue($formatterFactoryReflection->getConstructor()->isPrivate());
    }

    /** @dataProvider provideValidFormatterTypes */
    public function testFormatterCanBeCreatedFromValidType(string $formatterType, string $expectedFormatterClass): void
    {
        // when
        $formatter = FormatterFactory::create($formatterType);

        // then
        /** @noinspection UnnecessaryAssertionInspection */
        Assert::assertInstanceOf($expectedFormatterClass, $formatter);
    }

    public function provideValidFormatterTypes(): Generator
    {
        yield 'string' => [FormatterFactory::TYPE_STRING, StringFormatter::class];
        yield 'integer' => [FormatterFactory::TYPE_INTEGER, IntegerFormatter::class];
        yield 'float' => [FormatterFactory::TYPE_FLOAT, FloatFormatter::class];
    }

    public function testFormatterCannotBeCreatedFromInvalidType(): void
    {
        // expect
        $this->expectException(DomainException::class);

        // when
        FormatterFactory::create('invalid');
    }
}
