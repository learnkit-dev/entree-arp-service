<?php

namespace LearnKit\EntreeArpService;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LearnKit\EntreeArpService\Commands\EntreeArpServiceCommand;

class EntreeArpServiceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('entree-arp-service')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_entree-arp-service_table')
            ->hasCommand(EntreeArpServiceCommand::class);
    }
}
