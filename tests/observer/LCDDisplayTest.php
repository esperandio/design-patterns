<?php

declare(strict_types=1);

namespace Observer;

use PHPUnit\Framework\TestCase;

final class LCDDisplayTest extends TestCase
{
    private WeatherStation $objWeatherStation;
    private LCDDisplay $objLCDDisplay;

    public function setUp(): void
    {
        $this->objWeatherStation = new WeatherStation();
        $this->objLCDDisplay = new LCDDisplay($this->objWeatherStation);

        $this->objWeatherStation->add($this->objLCDDisplay);
    }

    public function testDisplayIsUpdatedAfterNotify(): void
    {
        $objWeatherData = new WeatherData();
        $objWeatherData->temperature = 1;
        $objWeatherData->humidity = 2;
        $objWeatherData->pressure = 3;

        $this->objWeatherStation->setState($objWeatherData);
        $this->objWeatherStation->notify();

        $this->assertSame(
            'LCDDisplay display: T 1.0, H 2.0, P 3.0<br>',
            $this->objLCDDisplay->display()
        );
    }

    public function testDisplayValuesEqualToZeroWhenNoDataIsDefined(): void
    {
        $this->objWeatherStation->notify();

        $this->assertSame(
            'LCDDisplay display: T 0.0, H 0.0, P 0.0<br>',
            $this->objLCDDisplay->display()
        );
    }
}
