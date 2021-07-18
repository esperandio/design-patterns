<?php

declare(strict_types=1);

namespace Strategy;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->objFlyBehavior = new FlyNoWay();
    }

    public function quack(): void
    {
        echo "Squeak";
    }

    public function display(): void
    {
        echo "Looks like a rubber duck";
    }
}
