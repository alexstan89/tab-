<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class TargetingMode
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class TargetingMode extends Provider
{
    /**
     * @var array
     */
    public static $modes = [
        'All',
        'Users that visited product page',
        'Users that saved product(s) in wishlist',
    ];

    /**
     * @param array $filters
     * @return array
     */
    public function getTargetingModes(array $filters = [])
    {
        return $this->withIdTransform(static::$modes, 'mode');
    }
}