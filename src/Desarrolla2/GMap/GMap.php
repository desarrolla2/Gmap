<?php

/**
 * This file is part of the Gmap proyect.
 * 
 * Description of GMaps
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@ideup.com>
 * @file : GMaps.php , UTF-8
 * @date : Sep 13, 2012 , 4:46:12 PM
 */

namespace Desarrolla2\GMap;

use Desarrolla2\GMap\Point;

class GMap
{

    const URL = 'http://maps.google.es/maps/geo';

    static public function getPointByCp($cp)
    {

        $cp = str_pad($cp, 5, '0', STR_PAD_LEFT);
        $xml = simplexml_load_file(
                self::URL . '?output=xml&q=' . $cp . ',Spain'
        );

        if (!$xml) {
            throw new Exception('Could not access the geocoding service: ' . $url);
        }
        $point = new Point();
        $coordinates = $xml->Response->Placemark->Point->coordinates;
        $coordinates = explode(',', $coordinates);
        $point->setLat($coordinates[1]);
        $point->setLng($coordinates[0]);
        $point->setCountry($xml->Response->Placemark->AddressDetails->Country->CountryName);
        $point->setProvince($xml->Response->Placemark->AddressDetails->Country
                ->AdministrativeArea->SubAdministrativeArea->SubAdministrativeAreaName);
        $point->setLocality($xml->Response->Placemark->AddressDetails->Country
                ->AdministrativeArea->SubAdministrativeArea->Locality->LocalityName);

        return $point;
    }

}