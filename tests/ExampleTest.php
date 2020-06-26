<?php

namespace Fixwa\Uberizer\Tests;

use Fixwa\Uberizer\UberizerServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    protected function getPackageProviders($app)
    {
        return [UberizerServiceProvider::class];
    }
}
