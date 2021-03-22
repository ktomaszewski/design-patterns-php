<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Structural\Bridge;

use DesignPatternsPhp\Structural\Bridge\AbstractGladiator;
use DesignPatternsPhp\Structural\Bridge\HumanGladiator;
use DesignPatternsPhp\Structural\Bridge\Knife;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Structural\Bridge\HumanGladiator */
final class HumanGladiatorTest extends TestCase
{
    private function createHumanGladiator(): HumanGladiator
    {
        return new HumanGladiator('Gladiator', new Knife());
    }

    public function testCanAttackEnemyGladiator(): void
    {
        // given
        $humanGladiator = $this->createHumanGladiator();
        $enemyGladiatorMock = new HumanGladiator('Enemy gladiator', new Knife());

        // when
        $humanGladiator->attack($enemyGladiatorMock);

        // then
        Assert::assertLessThan(AbstractGladiator::DEFAULT_HIT_POINTS, $enemyGladiatorMock->getHitPoints());
    }
}
