<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Adapter;

interface LoggerInterface
{
    public function log(string $message): void;
}
