<?php

declare(strict_types=1);

namespace Command;

class LightOffCommand implements ICommand
{
    private Light $objLight;

    public function __construct(Light $objLight)
    {
        $this->objLight = $objLight;
    }

    public function execute(): void
    {
        $this->objLight->off();
    }

    public function unexecute(): void
    {
        $this->objLight->on();
    }
}
