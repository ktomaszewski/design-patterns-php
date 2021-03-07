<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\StaticFactory;

final class FloatFormatter implements FormatterInterface
{
    public function format(mixed $input): string
    {
        return (string) (float) $input;
    }
}
