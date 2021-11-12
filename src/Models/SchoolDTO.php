<?php

namespace LearnKit\EntreeArpService\Models;

use LearnKit\EntreeArpService\ArpModel;

class SchoolDTO extends ArpModel
{
    protected $attributes = [
        'brin',
        'friendlyName',
        'friendlyNameWithBrin',
    ];
}
