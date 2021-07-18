<?php

declare(strict_types=1);

namespace Decorator;

abstract class AddonDecorator implements Beverage
{
    protected Beverage $objBeverage;

    public function __construct(Beverage $objBeverage)
    {
        $this->objBeverage = $objBeverage;
    }
}
