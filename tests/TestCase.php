<?php

namespace LearnKit\EntreeArpService\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use LearnKit\EntreeArpService\EntreeArpServiceServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'LearnKit\\EntreeArpService\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            EntreeArpServiceServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_entree-arp-service_table.php.stub';
        $migration->up();
        */
    }
}
