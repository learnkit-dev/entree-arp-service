<?php

namespace LearnKit\EntreeArpService\Models;

use LearnKit\EntreeArpService\ArpModel;

class ProviderDTO extends ArpModel
{
    protected $attributes = [
        'friendlyName',
        'organisationCode',
    ];
}
