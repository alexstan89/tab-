<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class Factory
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class Factory
{
    /**
     * @param $provider
     * @return Provider
     */
    public static function getProvider($provider)
    {
        $class = __NAMESPACE__. '\\'.ucfirst($provider);
        if (class_exists($class)) {
            return new $class();
        }

        throw new \InvalidArgumentException("Unknown audience data provider: {$provider}!");
    }
}