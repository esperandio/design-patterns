<?php

declare(strict_types=1);

namespace Command;

class LightUpCommand implements ICommand
{
    private Light $objLight;

    public function __construct(Light $objLight)
    {
        $this->objLight = $objLight;
    }

    public function execute(): void
    {
        $this->objLight->up();
    }

    public function unexecute(): void
    {
        $this->objLight->down();
    }
}
