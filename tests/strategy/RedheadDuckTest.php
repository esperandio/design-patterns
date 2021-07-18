<?php

declare(strict_types=1);

namespace Strategy;

use PHPUnit\Framework\TestCase;

final class RedheadDuckTest extends TestCase
{
    public function testCanFlyWithWings(): void
    {
        $objRedheadDuck = new RedheadDuck();

        $this->assertInstanceOf(
            FlyWithWings::class,
            $objRedheadDuck->getObjFlyBehavior()
        );
    }
}
