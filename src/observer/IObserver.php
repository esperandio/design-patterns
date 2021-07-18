<?php

declare(strict_types=1);

namespace Observer;

interface IObserver
{
    public function update(): void;
}
