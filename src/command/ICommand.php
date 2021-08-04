<?php

declare(strict_types=1);

namespace Command;

interface ICommand
{
    public function execute(): void;
    public function unexecute(): void;
}
