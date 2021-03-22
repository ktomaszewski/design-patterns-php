<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Structural\Bridge;

use DesignPatternsPhp\Structural\Bridge\AbstractGladiator;
use DesignPatternsPhp\Structural\Bridge\OrcGladiator;
use DesignPatternsPhp\Structural\Bridge\Sword;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/** @covers \DesignPatternsPhp\Structural\Bridge\OrcGladiator */
final class OrcGladiatorTest extends TestCase
{
    private function createOrcGladiator(): OrcGladiator
    {
        return new OrcGladiator('Gladiator', new Sword());
    }

    public function testCanAttackEnemyGladiator(): void
    {
        // given
        $orcGladiator = $this->createOrcGladiator();
        $enemyGladiatorMock = new OrcGladiator('Enemy gladiator', new Sword());

        // when
        $orcGladiator->attack($enemyGladiatorMock);

        // then
        Assert::assertLessThan(AbstractGladiator::DEFAULT_HIT_POINTS, $enemyGladiatorMock->getHitPoints());
    }
}
