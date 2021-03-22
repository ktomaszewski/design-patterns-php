<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Bridge;

final class Knife implements WeaponInterface
{
    public function getName(): string
    {
        return 'Knife';
    }

    public function getDamage(): int
    {
        return 10;
    }
}
