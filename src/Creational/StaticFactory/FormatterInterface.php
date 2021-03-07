<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\StaticFactory;

interface FormatterInterface
{
    public function format(mixed $input): string;
}
