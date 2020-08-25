<?php

namespace Claudiusnascimento\Seo\Tests;

use Orchestra\Testbench\TestCase;
use Claudiusnascimento\Seo\SeoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SeoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
