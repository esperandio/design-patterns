<?php

declare(strict_types=1);

namespace Command;

use PHPUnit\Framework\TestCase;

final class InvokerTest extends TestCase
{
    private Light $objLight;
    private Invoker $objInvoker;

    public function setUp(): void
    {
        $this->objLight = new Light();

        $this->objInvoker = new Invoker(
            new LightOnCommand($this->objLight),
            new LightOffCommand($this->objLight),
            new LightUpCommand($this->objLight),
            new LightDownCommand($this->objLight)
        );
    }

    public function testLightIsActiveAfterClickOn(): void
    {
        $this->objInvoker->clickOn();

        $this->assertSame(
            true,
            $this->objLight->isActive()
        );
    }

    public function testLightIsNotActiveAfterClickOff(): void
    {
        $this->objInvoker->clickOff();

        $this->assertSame(
            false,
            $this->objLight->isActive()
        );
    }

    public function testLightBrightnessIsHigherAfterClickUp(): void
    {
        $this->objInvoker->clickUp();

        $this->assertSame(
            6,
            $this->objLight->getBrightness()
        );
    }

    public function testLightBrightnessIsLowerAfterClickDown(): void
    {
        $this->objInvoker->clickDown();

        $this->assertSame(
            4,
            $this->objLight->getBrightness()
        );
    }
}
