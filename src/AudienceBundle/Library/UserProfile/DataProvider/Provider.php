<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class Provider
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
abstract class Provider
{
    /**
     * @param array $collection
     * @param string $fieldLabel
     * @return array
     */
    protected function withIdTransform(array $collection, $fieldLabel)
    {
        $data = [];

        $idGenerator = 1;
        foreach ($collection as $value) {
            $data[] = [
                'id' => $idGenerator,
                $fieldLabel => $value,
            ];
        }

        return $data;
    }
}