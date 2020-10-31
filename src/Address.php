<?php

namespace Robsonrk\JapaneseFaker;

class Address
{
    public $zipcode;
    public $province;
    public $city;
    public $town;
    public $province_rome;
    public $city_rome;
    public $town_rome;

    public function __construct()
    {
        $this->address = $this->setAddress();
    }

    public function setAddress()
    {
        $count = count(AddressData::ADDRESSES) - 1;

        $address = json_decode(json_encode(AddressData::ADDRESSES[rand(0, $count)]));

        $this->zipcode = $address->zipcode;
        $this->province = $address->province;
        $this->city = $address->city;
        $this->town = $address->town;
        $this->province_rome = $address->province_rome;
        $this->city_rome = $address->city_rome;
        $this->town_rome = $address->town_rome;
    }

    public function __toString()
    {
        return "〒$this->zipcode $this->province $this->city $this->town";
    }

}
