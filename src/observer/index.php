<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Observer\WeatherStation;
use Observer\PhoneDisplay;
use Observer\LCDDisplay;
use Observer\WeatherData;

$bjWeatherData = new WeatherData();
$bjWeatherData->temperature = 1;
$bjWeatherData->humidity = 2;
$bjWeatherData->pressure = 3;

$objWeatherStation = new WeatherStation();

$objPhoneDisplay = new PhoneDisplay($objWeatherStation);
$objLCDDisplay = new LCDDisplay($objWeatherStation);
$objLCDDisplay2 = new LCDDisplay($objWeatherStation);

$objWeatherStation->add($objPhoneDisplay);
$objWeatherStation->add($objLCDDisplay);

$objWeatherStation->notify();
