<?php

declare(strict_types=1);

namespace Command;

class LightDownCommand implements ICommand
{
    private Light $objLight;

    public function __construct(Light $objLight)
    {
        $this->objLight = $objLight;
    }

    public function execute(): void
    {
        $this->objLight->down();
    }

    public function unexecute(): void
    {
        $this->objLight->up();
    }
}
