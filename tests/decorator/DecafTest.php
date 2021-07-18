<?php

declare(strict_types=1);

namespace Decorator;

use PHPUnit\Framework\TestCase;

final class DecafTest extends TestCase
{
    public function testCostWhenDecafDefault(): void
    {
        $objDecaf = new Decaf();

        $this->assertSame(
            2.0,
            $objDecaf->cost()
        );
    }

    public function testCostWhenDecafWithCaramel(): void
    {
        $objDecafWithCaramel = new Caramel(new Decaf());

        $this->assertSame(
            5.0,
            $objDecafWithCaramel->cost()
        );
    }

    public function testCostWhenDecafWithSoy(): void
    {
        $objDecafWithSoy = new Soy(new Decaf());

        $this->assertSame(
            6.0,
            $objDecafWithSoy->cost()
        );
    }

    public function testCostWhenDecafWithCaramelAndSoy(): void
    {
        $objDecafWithCaramelAndSoy = new Caramel(new Soy(new Decaf()));

        $this->assertSame(
            9.0,
            $objDecafWithCaramelAndSoy->cost()
        );
    }
}
