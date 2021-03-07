<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\FactoryMethod;

final class StdoutLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo $message;
    }
}
