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
        $this->apiKey = config('entree-arp-service.api_key', env('ENTREE_ARP_SERVICE_API_KEY'));

        //
        $this->guzzle = new Guzzle([
            'base_uri' => config('entree-arp-service.arp_service_url', 'https://arpservice.entree.kennisnet.nl/v2/arp/'),
            'timeout' => 5.0,
            'force_ip_resolve' => 'v4',
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
