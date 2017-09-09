<?php

namespace AudienceBundle\Service;


use AudienceBundle\Library\UserProfile\DataProvider\Factory;
use AudienceBundle\Library\UserProfile\DataProvider\Provider;

/**
 * Class ExternalAudienceClientService
 * @package AudienceBundle\Service
 */
class ExternalAudienceClientService
{
    /**
     * @param $resource
     * @return Provider
     *
     */
    public function getEndpointResource($resource)
    {
        return Factory::getProvider($resource);
    }
}