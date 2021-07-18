<?php

declare(strict_types=1);

namespace Decorator;

class Caramel extends AddonDecorator
{
    public function cost(): float
    {
        return $this->objBeverage->cost() + 3.0;
    }
}
