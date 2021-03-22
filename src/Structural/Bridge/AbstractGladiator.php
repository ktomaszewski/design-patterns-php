<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Bridge;

abstract class AbstractGladiator
{
    public const DEFAULT_HIT_POINTS = 100;

    private int $hitPoints = self::DEFAULT_HIT_POINTS;

    public function __construct(
        private string $name,
        private WeaponInterface $weapon
    ) {
    }

    final public function getName(): string
    {
        return $this->name;
    }

    public function getHitPoints(): int
    {
        return $this->hitPoints;
    }

    final public function attack(AbstractGladiator $enemyGladiator): void
    {
        $enemyGladiator->hitPoints -= $this->weapon->getDamage();
    }
}
