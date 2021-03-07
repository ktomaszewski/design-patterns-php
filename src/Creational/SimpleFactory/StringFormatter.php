<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\SimpleFactory;

final class StringFormatter implements FormatterInterface
{
    public function format(mixed $input): string
    {
        return (string) $input;
    }
}
