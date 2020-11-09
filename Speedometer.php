<?php


class Speedometer
{
    private const KMTOMILES = 0.621;
    private const MILESTOKM = 1.609;

    public static function convertKmToMiles($km)
    {
        return $km * self::KMTOMILES;
    }

    public static function convertMilesToKm($miles)
    {
        return $miles * self::MILESTOKM;
    }
}