<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Pool;

use function uniqid;

final class DatabaseConnection
{
    private string $id;

    public function __construct()
    {
        $this->id = uniqid('', true);
    }

    public function getId(): string
    {
        return $this->id;
    }
}
