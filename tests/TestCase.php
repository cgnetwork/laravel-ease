<?php

namespace Cgnetwork\Ease\Tests;

use Cgnetwork\Ease\EaseServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app->setBasePath(__DIR__ . '/..');
    }

    protected function getPackageProviders($app)
    {
        return [
            EaseServiceProvider::class
        ];
    }
}
