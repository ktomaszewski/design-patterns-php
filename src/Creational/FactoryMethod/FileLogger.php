<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\FactoryMethod;

use function file_put_contents;

use const FILE_APPEND;
use const PHP_EOL;

final class FileLogger implements LoggerInterface
{
    public function __construct(private string $filePath)
    {
    }

    public function log(string $message): void
    {
        file_put_contents($this->filePath, $this->prepareMessage($message), FILE_APPEND);
    }

    private function prepareMessage(string $message): string
    {
        return $message . PHP_EOL;
    }
}
