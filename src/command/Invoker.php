<?php

declare(strict_types=1);

namespace Command;

class Invoker
{
    private ICommand $objOnCommand;
    private ICommand $objOffCommand;
    private ICommand $objUpCommand;
    private ICommand $objDownCommand;

    public function __construct(
        ICommand $objOnCommand,
        ICommand $objOffCommand,
        ICommand $objUpCommand,
        ICommand $objDownCommand
    ) {
        $this->objOnCommand = $objOnCommand;
        $this->objOffCommand = $objOffCommand;
        $this->objUpCommand = $objUpCommand;
        $this->objDownCommand = $objDownCommand;
    }

    public function clickOn(): void
    {
        $this->objOnCommand->execute();
    }

    public function clickOff(): void
    {
        $this->objOffCommand->execute();
    }

    public function clickUp(): void
    {
        $this->objUpCommand->execute();
    }

    public function clickDown(): void
    {
        $this->objDownCommand->execute();
    }
}
