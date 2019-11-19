<?php


class Speedometer
{
    const KM = 1.609;
    const MILE = 0.621;


    public static function convertKmToMiles($number)
    {
        return $number * Speedometer::MILE;

    }

    public static function convertMilesToKm($number)
    {
        return $number * Speedometer::KM;
    }
}
echo Speedometer::convertKmToMiles(180);
echo"<br/>";
echo Speedometer::convertMilesToKm(130);
