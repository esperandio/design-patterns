<?php

declare(strict_types=1);

namespace Strategy;

class FlyNoWay implements IFlyBehavior
{
    public function fly(): void
    {
        echo "Do nothing - can't fly";
    }
}
