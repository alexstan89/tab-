<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class Age
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class Age extends Provider
{
    const UPPER_AGE = 65;

    /**
     * @param array $filters
     * @return array
     */
    public function getAgeGroups(array $filters = [])
    {   
        $ageGroups = [];
        $maxAge = static::UPPER_AGE;
        for ($i=18; $i <= $maxAge; $i++) { 
            $i = $i === $maxAge ? $maxAge . '+' : $i;
            $ageGroups[] = $i;
        }

        return $this->withIdTransform($ageGroups, 'age');
    }
}