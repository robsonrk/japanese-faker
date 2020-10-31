<?php

namespace Robsonrk\JapaneseFaker\Tests;

use Orchestra\Testbench\TestCase;
use Robsonrk\JapaneseFaker\Address;
use Robsonrk\JapaneseFaker\JapaneseFaker;
use Robsonrk\JapaneseFaker\JapaneseFakerServiceProvider;
use stdClass;

class AddressTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [JapaneseFakerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $faker = new JapaneseFaker;

        $address = $faker->address;

        $this->assertNotNull($address);
        $this->assertInstanceOf(Address::class,$address);
        $this->assertIsString($address->zipcode);
        $this->assertIsString($address->province);
        $this->assertIsString($address->city);
        $this->assertIsString($address->town);
        $this->assertIsString($address->province_rome);
        $this->assertIsString($address->city_rome);
        $this->assertIsString($address->town_rome);
        $this->assertIsString((string)$address);
    }
}
