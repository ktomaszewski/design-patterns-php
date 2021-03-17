<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Structural\Adapter;

final class LoggerAdapter implements LoggerInterface
{
    public function __construct(private ExternalLogger $externalLogger)
    {
    }

    public function log(string $message): void
    {
        $this->externalLogger->logMessage($message);
    }
}
