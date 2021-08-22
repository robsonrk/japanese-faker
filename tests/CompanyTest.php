<?php

namespace Robsonrk\JapaneseFaker\Tests;

use Orchestra\Testbench\TestCase;
use Robsonrk\JapaneseFaker\Company;
use Robsonrk\JapaneseFaker\JapaneseFaker;
use Robsonrk\JapaneseFaker\JapaneseFakerServiceProvider;

class CompanyTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [JapaneseFakerServiceProvider::class];
    }
    
    /** @test */
    public function can_retrieve_company_attributes()
    {
        $faker = new JapaneseFaker;

        $company = $faker->company;

        $this->assertInstanceOf(Company::class,$company);
        $this->assertIsString($company->name('kanji'));
        $this->assertIsString($company->name('rome'));
    }
}
