<?php

namespace App\Entity;

final class Site
{
    /** @var string */
    private $site;

    /** @var string */
    private $apiKey;

    /**
     * Site constructor.
     * @param string $apiKey
     * @param string $site
     */
    public function __construct(string $site, string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->site = $site;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getSite(): string
    {
        return $this->site;
    }
}
