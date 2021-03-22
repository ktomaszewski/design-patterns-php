<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Bridge;

interface WeaponInterface
{
    public function getName(): string;

    public function getDamage(): int;
}
