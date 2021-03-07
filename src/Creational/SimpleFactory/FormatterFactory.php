<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\SimpleFactory;

use DomainException;

use function sprintf;

final class FormatterFactory
{
    public const TYPE_STRING = 'string';
    public const TYPE_INTEGER = 'integer';
    public const TYPE_FLOAT = 'float';

    /**
     * @throws DomainException
     */
    public function create(string $type): FormatterInterface
    {
        return match ($type) {
            self::TYPE_STRING => new StringFormatter(),
            self::TYPE_INTEGER => new IntegerFormatter(),
            self::TYPE_FLOAT => new FloatFormatter(),
            default => throw new DomainException(sprintf('Given formatter type is not supported: %s', $type))
        };
    }
}
