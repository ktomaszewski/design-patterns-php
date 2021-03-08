<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Prototype;

final class Invitation
{
    public function __construct(private string $emailAddress)
    {
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
