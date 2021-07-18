<?php

declare(strict_types=1);

namespace Decorator;

class Decaf implements Beverage
{
    public function cost(): float
    {
        return 2.0;
    }
}
