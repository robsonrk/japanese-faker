<?php

namespace Robsonrk\JapaneseFaker;

class Address
{
    public $zipcode;
    public $province;
    public $city;
    public $town;
    public $building;
    public $province_rome;
    public $city_rome;
    public $town_rome;
    public $building_rome;

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
        
        $buildingData = $this->generateBuildingAddress();
        $this->building = $buildingData['japanese'];
        $this->building_rome = $buildingData['romaji'];
    }

    private function generateBuildingAddress(): array
    {
        $buildings = [
            ['japanese' => 'サンシャイン', 'romaji' => 'Sunshine'],
            ['japanese' => 'グランド', 'romaji' => 'Grand'],
            ['japanese' => 'ロイヤル', 'romaji' => 'Royal'],
            ['japanese' => 'パーク', 'romaji' => 'Park'],
            ['japanese' => 'ガーデン', 'romaji' => 'Garden'],
            ['japanese' => 'スカイ', 'romaji' => 'Sky'],
            ['japanese' => 'シティ', 'romaji' => 'City'],
            ['japanese' => 'センター', 'romaji' => 'Center'],
            ['japanese' => 'プレミア', 'romaji' => 'Premier'],
            ['japanese' => 'エクセル', 'romaji' => 'Excel'],
        ];

        $buildingTypes = [
            ['japanese' => 'ビル', 'romaji' => 'Building'],
            ['japanese' => 'マンション', 'romaji' => 'Mansion'],
            ['japanese' => 'アパート', 'romaji' => 'Apartment'],
            ['japanese' => 'コーポ', 'romaji' => 'Corp'],
            ['japanese' => 'ハイツ', 'romaji' => 'Heights'],
            ['japanese' => 'プラザ', 'romaji' => 'Plaza'],
            ['japanese' => 'タワー', 'romaji' => 'Tower'],
            ['japanese' => 'スクエア', 'romaji' => 'Square'],
        ];

        $selectedBuilding = $buildings[array_rand($buildings)];
        $selectedType = $buildingTypes[array_rand($buildingTypes)];
        $floor = rand(1, 20);
        $room = rand(101, 999);

        return [
            'japanese' => "{$selectedBuilding['japanese']}{$selectedType['japanese']} {$floor}階 {$room}号室",
            'romaji' => "{$selectedBuilding['romaji']} {$selectedType['romaji']} {$floor}F Room {$room}",
        ];
    }

    public function getBuildingAddress(): array
    {
        return $this->generateBuildingAddress();
    }

    public function __toString()
    {
        return "〒$this->zipcode $this->province $this->city $this->town";
    }

}
