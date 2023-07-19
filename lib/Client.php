<?php

namespace Sportmonks;

class Client
{
    
    public readonly \Sportmonks\Api\CitiesApi $cities;
    
    public readonly \Sportmonks\Api\ContinentsApi $continents;
    
    public readonly \Sportmonks\Api\CountriesApi $countries;
    
    public readonly \Sportmonks\Api\MyApi $my;
    
    public readonly \Sportmonks\Api\OddsApi $odds;
    
    public readonly \Sportmonks\Api\RegionsApi $regions;
    
    public readonly \Sportmonks\Api\SportApi $sport;
    
    public readonly \Sportmonks\Api\TypesApi $types;

    /**
     * Constructor
     */
    public function __construct(
        string $version = null,
        string $sport = null,
        string $apiKey = null,
        bool $verifySsl = null,
        string $host = 'https://api.sportmonks.com',
        \Sportmonks\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \Sportmonks\Configuration(
                version: $version,
                sport: $sport,
                apiKey: $apiKey,
            );
            if ($host !== null) $config->setHost($host);
            if ($verifySsl !== null) $config->setVerifySsl($verifySsl);
        }
        $this->cities = new \Sportmonks\Api\CitiesApi($config);
        $this->continents = new \Sportmonks\Api\ContinentsApi($config);
        $this->countries = new \Sportmonks\Api\CountriesApi($config);
        $this->my = new \Sportmonks\Api\MyApi($config);
        $this->odds = new \Sportmonks\Api\OddsApi($config);
        $this->regions = new \Sportmonks\Api\RegionsApi($config);
        $this->sport = new \Sportmonks\Api\SportApi($config);
        $this->types = new \Sportmonks\Api\TypesApi($config);
    }
}
