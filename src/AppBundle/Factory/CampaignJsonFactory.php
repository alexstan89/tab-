<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 9/10/17
 * Time: 3:22 AM
 */

namespace AppBundle\Factory;


use AppBundle\Entity\Campaign;

class CampaignJsonFactory
{
    public static function create($details) {
        $campaign = new Campaign();

        $campaign
            ->setBudget($details['budget'])
            ->setStock($details['stock'])
            ->setDateStart(new \DateTime($details['dateStart']))
            ->setDateEnd(new \DateTime($details['dateEnd']))
            ->setMaxBid($details['maxBid'])
            ->setStatus(true);
        return $campaign;
    }
}