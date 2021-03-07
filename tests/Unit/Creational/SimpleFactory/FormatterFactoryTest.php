<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\SimpleFactory;

use DesignPatternsPhp\Creational\SimpleFactory\FloatFormatter;
use DesignPatternsPhp\Creational\SimpleFactory\FormatterFactory;
use DesignPatternsPhp\Creational\SimpleFactory\IntegerFormatter;
use DesignPatternsPhp\Creational\SimpleFactory\StringFormatter;
use DomainException;
use Generator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\SimpleFactory\FormatterFactory */
final class FormatterFactoryTest extends TestCase
{
    private function createFormatterFactory(): FormatterFactory
    {
        return new FormatterFactory();
    }

    /** @dataProvider provideValidFormatterTypes */
    public function testFormatterCanBeCreatedFromValidType(string $formatterType, string $expectedFormatterClass): void
    {
        // given
        $formatterFactory = $this->createFormatterFactory();

        // when
        $formatter = $formatterFactory->create($formatterType);

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
        // given
        $formatterFactory = $this->createFormatterFactory();

        // expect
        $this->expectException(DomainException::class);

        // when
        $formatterFactory->create('invalid');
    }
}
