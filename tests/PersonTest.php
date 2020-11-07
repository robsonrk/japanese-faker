<?php

namespace Robsonrk\JapaneseFaker\Tests;

use Orchestra\Testbench\TestCase;
use Robsonrk\JapaneseFaker\JapaneseFaker;
use Robsonrk\JapaneseFaker\JapaneseFakerServiceProvider;
use Robsonrk\JapaneseFaker\Person;

class PersonTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [JapaneseFakerServiceProvider::class];
    }
    
    /** @test */
    public function can_retrieve_person_attributes()
    {
        $faker = new JapaneseFaker;

        $person = $faker->person;

        $this->assertNotNull($person);
        $this->assertInstanceOf(Person::class,$person);
        $this->assertIsString($person->gender());
        $this->assertIsString($person->name('kana'));
    }
}
