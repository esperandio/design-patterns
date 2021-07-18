<?php

declare(strict_types=1);

namespace Observer;

class LCDDisplay implements IObserver, IDisplay
{
    private float $temperature = 0.0;
    private float $humidity = 0.0;
    private float $pressure = 0.0;

    private WeatherStation $objWeatherStation;

    public function __construct(WeatherStation $objWeatherStation)
    {
        $this->objWeatherStation = $objWeatherStation;
    }

    public function update(): void
    {
        $this->temperature = $this->objWeatherStation->getTemperature();
        $this->humidity = $this->objWeatherStation->getHumidity();
        $this->pressure = $this->objWeatherStation->getPressure();
    }

    public function display(): string
    {
        return sprintf(
            "LCDDisplay display: T %s, H %s, P %s<br>",
            number_format($this->temperature, 1),
            number_format($this->humidity, 1),
            number_format($this->pressure, 1)
        );
    }
}
