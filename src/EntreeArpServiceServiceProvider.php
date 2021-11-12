<?php

namespace LearnKit\EntreeArpService;

use Illuminate\Support\ServiceProvider;

class EntreeArpServiceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/entree-arp-service.php' => config_path('entree-arp-service.php'),
        ], 'entree-arp-service');
    }
}
