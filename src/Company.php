<?php

namespace Robsonrk\JapaneseFaker;

use Exception;

class Company
{
    private const AVAILABLE_TYPES = ['kanji', 'rome'];
    private $name;

    public function __construct()
    {
        $this->setName();
    }

    public function setName()
    {
        $this->name = CompanyNames::getRandomName();
    }

    public function name(string $type)
    {
        $this->restrictType($type);
        
        $name = $this->name[$type];
        return "$name";
    }

    public function gender()
    {
        return $this->first_name['gender'] ?? null;
    }

    public function restrictType(string $type)
    {
        if (!$this->isAvailableType($type)) {
            throw new Exception("The type '$type' is not available, available types: ". implode(',', self::AVAILABLE_TYPES) , 1);
        }
    }

    public function isAvailableType(string $type)
    {
        return (in_array($type, self::AVAILABLE_TYPES));
    }
}
