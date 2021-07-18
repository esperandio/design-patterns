<?php

declare(strict_types=1);

namespace Decorator;

use PHPUnit\Framework\TestCase;

final class ExpressoTest extends TestCase
{
    public function testCostWhenExpressoDefault(): void
    {
        $objExpresso = new Expresso();

        $this->assertSame(
            1.0,
            $objExpresso->cost()
        );
    }

    public function testCostWhenExpressoWithCaramel(): void
    {
        $objExpressoWithCaramel = new Caramel(new Expresso());

        $this->assertSame(
            4.0,
            $objExpressoWithCaramel->cost()
        );
    }

    public function testCostWhenExpressoWithSoy(): void
    {
        $objExpressoWithSoy = new Soy(new Expresso());

        $this->assertSame(
            5.0,
            $objExpressoWithSoy->cost()
        );
    }

    public function testCostWhenExpressoWithCaramelAndSoy(): void
    {
        $objExpressoWithCaramelAndSoy = new Caramel(new Soy(new Expresso()));

        $this->assertSame(
            8.0,
            $objExpressoWithCaramelAndSoy->cost()
        );
    }
}
