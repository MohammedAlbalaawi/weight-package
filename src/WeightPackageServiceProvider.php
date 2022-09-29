<?php

namespace MohammedAlbalaawi\WeightPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MohammedAlbalaawi\WeightPackage\Commands\WeightPackageCommand;

class WeightPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weight-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_weight-package_table')
            ->hasCommand(WeightPackageCommand::class);
    }
}
