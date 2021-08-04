<?php

declare(strict_types=1);

namespace Command;

class Light
{
    private bool $active = false;
    private int $brightness = 5;

    public function on(): void
    {
        $this->active = true;
    }

    public function off(): void
    {
        $this->active = false;
    }

    public function up(): void
    {
        if ($this->brightness < 10) {
            $this->brightness++;
        }
    }

    public function down(): void
    {
        if ($this->brightness > 0) {
            $this->brightness--;
        }
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function getBrightness(): int
    {
        return $this->brightness;
    }
}
