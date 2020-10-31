<?php

namespace Robsonrk\JapaneseFaker\Tests;

use Orchestra\Testbench\TestCase;
use Robsonrk\JapaneseFaker\JapaneseFakerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [JapaneseFakerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
