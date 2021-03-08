<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Tests\Unit\Creational\Prototype;

use DesignPatternsPhp\Creational\Prototype\City;
use DesignPatternsPhp\Creational\Prototype\Event;
use DesignPatternsPhp\Creational\Prototype\Invitation;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

use function current;

/** @covers \DesignPatternsPhp\Creational\Prototype\Event */
final class EventTest extends TestCase
{
    private function createEvent(): Event
    {
        return (new Event(
            new City('city'),
            10000
        ))->addInvitations([
            new Invitation('invitation_1@unit.test'),
            new Invitation('invitation_2@unit.test'),
            new Invitation('invitation_3@unit.test')
        ]);
    }

    public function testEventIsValidPrototype(): void
    {
        // given
        $event = $this->createEvent();

        // when
        $clonedEvent = clone $event;

        // then
        Assert::assertNotSame($clonedEvent->getId(), $event->getId());
        Assert::assertSame($clonedEvent->getBudget(), $event->getBudget());
        Assert::assertNotSame($clonedEvent->getCreatedAt(), $event->getCreatedAt());
        Assert::assertSame($clonedEvent->getCity(), $event->getCity());
        Assert::assertSameSize($clonedEvent->getInvitations(), $event->getInvitations());
        Assert::assertContainsOnlyInstancesOf(Invitation::class, $clonedEvent->getInvitations());
        Assert::assertSame(current($clonedEvent->getInvitations()), current($event->getInvitations()));
    }
}
