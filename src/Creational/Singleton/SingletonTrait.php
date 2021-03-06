<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Singleton;

use LogicException;

use function sprintf;

trait SingletonTrait
{
    /** @var null|static */
    private static ?self $instance = null;

    final private function __construct()
    {
    }

    final public static function getInstance(): static
    {
        if (!self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * @throws LogicException
     */
    final public function __clone(): void
    {
        throw new LogicException(sprintf('%s is a singleton - it cannot be cloned', __CLASS__));
    }

    /**
     * @throws LogicException
     */
    final public function __unserialize(array $data): void
    {
        throw new LogicException(sprintf('%s is a singleton - it cannot be unserialized', __CLASS__));
    }
}
