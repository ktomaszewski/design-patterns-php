<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Adapter;

final class ExternalLogger
{
    public function logMessage(string $message): void
    {
        echo $message;
    }
}
