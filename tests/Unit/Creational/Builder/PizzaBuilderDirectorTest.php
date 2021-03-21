<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\Builder;

use DesignPatternsPhp\Creational\Builder\MargheritaPizza;
use DesignPatternsPhp\Creational\Builder\MargheritaPizzaBuilder;
use DesignPatternsPhp\Creational\Builder\PizzaBuilderDirector;
use DesignPatternsPhp\Creational\Builder\PizzaBuilderInterface;
use DesignPatternsPhp\Creational\Builder\SalamiPizza;
use DesignPatternsPhp\Creational\Builder\SalamiPizzaBuilder;
use Generator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Creational\Builder\PizzaBuilderDirector */
final class PizzaBuilderDirectorTest extends TestCase
{
    private function createPizzaBuilderDirector(): PizzaBuilderDirector
    {
        return new PizzaBuilderDirector();
    }

    /** @dataProvider providePizzaBuilders */
    public function testBuildersProducePizza(PizzaBuilderInterface $pizzaBuilder, string $expectedPizzaClass): void
    {
        // given
        $pizzaBuilderDirector = $this->createPizzaBuilderDirector();

        // when
        $pizza = $pizzaBuilderDirector->build($pizzaBuilder);

        // then
        /** @noinspection UnnecessaryAssertionInspection */
        Assert::assertInstanceOf($expectedPizzaClass, $pizza);
    }

    public function providePizzaBuilders(): Generator
    {
        yield 'margherita' => [new MargheritaPizzaBuilder(), MargheritaPizza::class];
        yield 'salami' => [new SalamiPizzaBuilder(), SalamiPizza::class];
    }
}
