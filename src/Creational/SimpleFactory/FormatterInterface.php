<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\SimpleFactory;

interface FormatterInterface
{
    public function format(mixed $input): string;
}
