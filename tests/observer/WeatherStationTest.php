<?php

declare(strict_types=1);

namespace Observer;

use PHPUnit\Framework\TestCase;

final class WeatherStationTest extends TestCase
{
    private WeatherStation $objWeatherStation;
    private FakeDisplay $objDefaultFakeDisplay;

    public function setUp(): void
    {
        $this->objWeatherStation = new WeatherStation();
        $this->objDefaultFakeDisplay = new FakeDisplay();

        $this->objWeatherStation->add($this->objDefaultFakeDisplay);
    }

    public function testCanAddDisplay(): void
    {
        $objFakeDisplay = new FakeDisplay();

        $this->objWeatherStation->add($objFakeDisplay);

        $this->assertSame(2, $this->objWeatherStation->getCountArrObservers());
    }

    public function testCanRemoveDisplay(): void
    {
        $this->objWeatherStation->remove($this->objDefaultFakeDisplay);
        $this->assertSame(0, $this->objWeatherStation->getCountArrObservers());
    }

    public function testCannotRemoveDisplayThatIsNotAdded(): void
    {
        $this->expectException(ObserverNotFoundException::class);

        $objNewFakeDisplay = new FakeDisplay();

        $this->objWeatherStation->remove($objNewFakeDisplay);
    }
}
