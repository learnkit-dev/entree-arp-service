<?php

namespace LearnKit\EntreeArpService\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;

class SchoolDTO
{
    use HasAttributes;

    protected $attributes = [
        'brin',
        'friendlyName',
    ];
}
