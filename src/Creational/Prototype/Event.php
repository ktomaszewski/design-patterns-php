<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Prototype;

use DateTimeImmutable;

use function array_walk;
use function uniqid;

final class Event implements PrototypeInterface
{
    private string $id;

    private DateTimeImmutable $createdAt;

    /** @var Invitation[] */
    private array $invitations = [];

    public function __construct(
        private City $city,
        private int $budget
    ) {
        $this->id = $this->generateId();
        $this->createdAt = $this->generateCreatedAt();
    }

    public function getCity(): City
    {
        return $this->city;
    }

    public function getBudget(): int
    {
        return $this->budget;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /** @return Invitation[] */
    public function getInvitations(): array
    {
        return $this->invitations;
    }

    public function addInvitation(Invitation $invitation): self
    {
        $this->invitations[spl_object_id($invitation)] = $invitation;

        return $this;
    }

    /** @var Invitation[] $invitations */
    public function addInvitations(array $invitations): self
    {
        foreach ($invitations as $invitation) {
            $this->addInvitation($invitation);
        }

        return $this;
    }

    public function __clone(): void
    {
        $this->id = $this->generateId();
        $this->createdAt = $this->generateCreatedAt();
        array_walk($this->invitations, static fn(Invitation $invitation) => clone $invitation);
    }

    private function generateId(): string
    {
        return uniqid('', true);
    }

    private function generateCreatedAt(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
