<?php

declare(strict_types=1);

namespace Observer;

interface IObservable
{
    public function add(IObserver $objObserver): void;
    public function remove(IObserver $objObserver): void;
    public function notify(): void;
}
