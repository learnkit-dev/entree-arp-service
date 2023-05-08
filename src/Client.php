<?php

namespace LearnKit\EntreeArpService;

use GuzzleHttp\Client as Guzzle;

class Client
{
    protected Guzzle $guzzle;

    protected string $apiKey;

    public function __construct()
    {
        //
        $this->apiKey = config('entree-arp-service.api_key');

        //
        $this->guzzle = new Guzzle([
            'base_uri' => config('entree-arp-service.arp_service_url'),
            'timeout' => 5.0,
            'headers' => [
                'apiKey' => $this->apiKey,
            ],
        ]);
    }

    public function get($resource)
    {
        $response = $this->guzzle->request('GET', $resource);

        return json_decode($response->getBody(), true);
    }
}
