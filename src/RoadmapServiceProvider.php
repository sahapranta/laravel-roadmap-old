<?php

namespace Pranta\Roadmap;

use Pranta\Roadmap\Commands\RoadmapCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RoadmapServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-roadmap')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-roadmap_table')
            ->hasCommand(RoadmapCommand::class);
    }
}
