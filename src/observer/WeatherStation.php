<?php

declare(strict_types=1);

namespace Observer;

class WeatherStation implements IObservable
{
    private WeatherData $objWeatherData;
    private array $arrObservers = [];

    public function __construct()
    {
        $this->objWeatherData = new WeatherData();
    }

    public function add(IObserver $objObserver): void
    {
        $this->arrObservers[] = $objObserver;
    }

    public function remove(IObserver $objObserver): void
    {
        $arrObserverFound = array_filter(
            $this->arrObservers,
            fn(IObserver $objObserverAdded) => $objObserverAdded === $objObserver
        );

        if (count($arrObserverFound) == 0) {
            throw new ObserverNotFoundException();
        }

        unset(
            $this->arrObservers[
            array_keys($arrObserverFound)[0]
            ]
        );
    }

    public function notify(): void
    {
        array_walk(
            $this->arrObservers,
            fn(IObserver $objObserver) => $objObserver->update()
        );
    }

    public function getCountArrObservers(): int
    {
        return count($this->arrObservers);
    }

    public function setState(WeatherData $objWeatherData): void
    {
        $this->objWeatherData = $objWeatherData;
    }

    public function getTemperature(): float
    {
        return $this->objWeatherData->temperature;
    }

    public function getHumidity(): float
    {
        return $this->objWeatherData->humidity;
    }

    public function getPressure(): float
    {
        return $this->objWeatherData->pressure;
    }
}
