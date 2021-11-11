<?php

namespace LearnKit\EntreeArpService\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;

class ProviderDTO
{
    use HasAttributes;

    public function __construct($data = [])
    {
        $this->setRawAttributes($data);

        $this->attributes = [
            'friendlyName',
            'organisationCode',
        ];
    }
}
