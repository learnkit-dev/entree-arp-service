<?php

namespace LearnKit\EntreeArpService\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;

class ProviderDTO
{
    use HasAttributes;

    protected $attributes = [
        'friendlyName',
        'organisationCode',
    ];
}
