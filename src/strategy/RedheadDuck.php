<?php

declare(strict_types=1);

namespace Strategy;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->objFlyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        echo "Looks like a redhead duck";
    }
}
