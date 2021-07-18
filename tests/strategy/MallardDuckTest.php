<?php

declare(strict_types=1);

namespace Strategy;

use PHPUnit\Framework\TestCase;

final class MallardDuckTest extends TestCase
{
    public function testCanFlyWithWings(): void
    {
        $objMallardDuck = new MallardDuck();

        $this->assertInstanceOf(
            FlyWithWings::class,
            $objMallardDuck->getObjFlyBehavior()
        );
    }
}
