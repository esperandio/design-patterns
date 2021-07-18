<?php

declare(strict_types=1);

namespace Decorator;

class Expresso implements Beverage
{
    public function cost(): float
    {
        return 1.0;
    }
}
