<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Bridge;

final class Sword implements WeaponInterface
{
    public function getName(): string
    {
        return 'Sword';
    }

    public function getDamage(): int
    {
        return 30;
    }
}
