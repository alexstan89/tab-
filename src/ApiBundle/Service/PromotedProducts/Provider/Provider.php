<?php

namespace ApiBundle\Service\PromotedProducts\Provider;

/**
 * Class Provider
 * @package ApiBundle\Service\PromotedProducts\Provider
 */
abstract class Provider
{
    /**
     * @param array $criteria
     * @return array
     */
    abstract public function getPromotedProducs(array $criteria);

}