<?php

/**
 * This file is part of the Gmap proyect.
 * 
 * Description of Point
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@ideup.com>
 * @file : Point.php , UTF-8
 * @date : Sep 13, 2012 , 4:51:27 PM
 */

namespace Desarrolla2\GMap;

class Point
{

    /**
     * @var type 
     */
    protected $lat;

    /**
     * @var type 
     */
    protected $lng;

    /**
     * @var type 
     */
    protected $country;

    /**
     * @var type 
     */
    protected $locality;

    /**
     * @var type 
     */
    protected $province;

    /**
     * 
     * @return type
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * 
     * @return type
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * 
     * @return type
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * 
     * @return type
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * 
     * @return type
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * 
     * @param type $lat
     */
    public function setLat($lat)
    {
        $this->lat = (string) $lat;
    }

    /**
     * 
     * @param type $lng
     */
    public function setLng($lng)
    {
        $this->lng = (string) $lng;
    }

    /**
     * 
     * @param type $country
     */
    public function setCountry($country)
    {
        $this->country = (string) $country;
    }

    /**
     * 
     * @param type $locality
     */
    public function setLocality($locality)
    {
        $this->locality = (string) $locality;
    }

    /**
     * 
     * @param type $province
     */
    public function setProvince($province)
    {
        $this->province = (string) $province;
    }

}