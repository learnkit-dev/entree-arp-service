<?php

namespace LearnKit\EntreeArpService;

use Illuminate\Database\Eloquent\Model;

class ArpModel
{
    protected $attributes = [];

    protected $data = [];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function __get(string $name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    public function __isset(string $name)
    {
        return array_key_exists($name, $this->data) && $this->data[$name] !== "";
    }

    public function fill(array $attributes)
    {
        foreach ($attributes as $name => $value) {
            if (in_array($name, $this->attributes)) {
                $this->data[$name] = $value;
            }
        }
    }

    public function __toArray()
    {
        return $this->data;
    }
}
