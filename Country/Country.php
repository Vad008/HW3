<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 23.10.15
 * Time: 17:29
 */
namespace Country;

use Players\Players;

class Country extends Players
{
    protected $country;
    protected $position;

    public function getCountry()
    {
        return $this->country;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function __toString()
    {
        $p = parent::__toString();
        $p .= 'Country: ' . $this->getCountry() . "<br>";
        $p .= 'Position: ' . $this->getPosition() . "<br>";

        return $p;
    }
}