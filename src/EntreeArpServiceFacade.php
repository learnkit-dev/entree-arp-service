<?php

namespace LearnKit\EntreeArpService;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LearnKit\EntreeArpService\EntreeArpService
 */
class EntreeArpServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'entree-arp-service';
    }
}
