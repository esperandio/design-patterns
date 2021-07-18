<?php

declare(strict_types=1);

namespace Strategy;

abstract class Duck
{
    protected IFlyBehavior $objFlyBehavior;

    public function quack(): void
    {
        echo "Quacking";
    }

    public function swim(): void
    {
        echo "Swimming";
    }

    public function performFly(): void
    {
        $this->objFlyBehavior->fly();
    }

    public function getObjFlyBehavior(): IFlyBehavior
    {
        return $this->objFlyBehavior;
    }

    abstract protected function display(): void;
}
