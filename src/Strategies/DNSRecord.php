<?php

namespace SunAsterisk\DomainVerifier\Strategies;

class DNSRecord implements StrategyInterface
{
    /**
     * Verfiy domain ownership via TXT record
     *
     * @param  string  $domain
     * @return bool
     */
    public function verify(string $domain)
    {
        return false;
    }
}