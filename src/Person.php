<?php

namespace Robsonrk\JapaneseFaker;

use Exception;

class Person
{
    private const AVAILABLE_TYPES = ['kanji', 'kana', 'rome'];
    private $first_name;
    private $last_name;

    public function __construct()
    {
        $this->setName();
    }

    public function setName()
    {
        $this->first_name = PersonNames::FIRST_NAMES[rand(0, count(PersonNames::FIRST_NAMES) - 1)];
        $this->last_name = PersonNames::LAST_NAMES[rand(0, count(PersonNames::LAST_NAMES) - 1)];
    }

    public function name(string $type)
    {
        $this->restrictType($type);
        
        $first = $this->first_name[$type];
        $last = $this->last_name[$type];
        return "$last $first";
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
