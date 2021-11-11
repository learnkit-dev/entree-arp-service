<?php

namespace LearnKit\EntreeArpService\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;

class SchoolDTO
{
    use HasAttributes;

    public function __construct($data = [])
    {
        $this->setRawAttributes($data);

        $this->attributes = [
            'brin',
            'friendlyName',
        ];
    }
}
