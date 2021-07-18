<?php

declare(strict_types=1);

namespace Strategy;

use PHPUnit\Framework\TestCase;

final class RubberDuckTest extends TestCase
{
    public function testCannotFly(): void
    {
        $objRubberDuck = new RubberDuck();

        $this->assertInstanceOf(
            FlyNoWay::class,
            $objRubberDuck->getObjFlyBehavior()
        );
    }
}
