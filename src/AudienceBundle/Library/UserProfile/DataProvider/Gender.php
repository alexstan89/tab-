<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class Gender
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class Gender extends Provider
{   
    public static $genders = [
        'Men',
        'Women',
        'All'
    ];

    /**
     * @param array $filters
     * @return array
     */
    public function getGenders(array $filters = [])
    {
        return $this->withIdTransform(static::$genders, 'gender');
    }
}