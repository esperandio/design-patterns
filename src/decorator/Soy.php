<?php

declare(strict_types=1);

namespace Decorator;

class Soy extends AddonDecorator
{
    public function cost(): float
    {
        return $this->objBeverage->cost() + 4.0;
    }
}
