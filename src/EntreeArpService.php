<?php

namespace LearnKit\EntreeArpService;

use LearnKit\EntreeArpService\Models\ProviderDTO;
use LearnKit\EntreeArpService\Models\SchoolDTO;

class EntreeArpService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function schoolList()
    {
        $response = $this->client->get("school-list");

        $collection = collect();

        foreach ($response as $school) {
            $school['friendlyNameWithBrin'] = "{$school['friendlyName']} - {$school['brin']}";

            $collection->push(new SchoolDTO($school));
        }

        return $collection;
    }

    public function spList()
    {
        $response = $this->client->get("sp-list");

        $collection = collect();

        foreach ($response as $sp) {
            $collection->push(new ProviderDTO($sp));
        }

        return $collection;
    }
}
