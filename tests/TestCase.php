<?php

namespace MohammedAlbalaawi\WeightPackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MohammedAlbalaawi\WeightPackage\WeightPackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MohammedAlbalaawi\\WeightPackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            WeightPackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_weight-package_table.php.stub';
        $migration->up();
        */
    }
}
