<?php

declare(strict_types=1);

namespace Strategy;

class FlyWithWings implements IFlyBehavior
{
    public function fly(): void
    {
        echo "Flying with wings";
    }
}
