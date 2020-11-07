<?php

namespace Robsonrk\JapaneseFaker;

class JapaneseFaker
{
    public function __construct()
    {
        $this->address = new Address;
        $this->person = new Person;
    }
}