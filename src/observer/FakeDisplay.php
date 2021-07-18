<?php

declare(strict_types=1);

namespace Observer;

class FakeDisplay implements IObserver, IDisplay
{
    public function update(): void
    {
    }

    public function display(): string
    {
        return "";
    }
}
