<?php

declare(strict_types=1);

namespace Command;

class LightOnCommand implements ICommand
{
    private Light $objLight;

    public function __construct(Light $objLight)
    {
        $this->objLight = $objLight;
    }

    public function execute(): void
    {
        $this->objLight->on();
    }

    public function unexecute(): void
    {
        $this->objLight->off();
    }
}
