<?php

require_once FCPATH . 'vendor/autoload.php';


use GeoIp2\Database\Reader;

function lookupGeoIP()
{
    // Use the MaxMind GeoIP2 library

    $ipAddress = $_SERVER['REMOTE_ADDR'];
    // This reader object should be reused across lookups as creation of it is
    // expensive.
    $reader = new Reader(APPPATH . 'config/maxmind-database.mmdb');

    $record = $reader->country($ipAddress);
    dd($record->country->iso_code);
    // $countryIsoCode = $record->country->isoCode;
    // echo $countryIsoCode;
    exit;
    // Now you can do something with $countryIsoCode, e.g., display it in a view.
}
