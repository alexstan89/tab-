<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;


class CampaignRepository extends EntityRepository
{
    /**
     * @param  array $fields
     * @return array
     */
    public function getCampaigns(array $fields)
    {
        if (empty($fields)) {
            return array();
        }

        $qb = $this->getEntityManager()->createQueryBuilder();

        foreach ($fields as $field) {
            $qb->addSelect('c.' . $field);
        }
        $qb->from('AppBundle:Campaign', 'c');

        return $qb->getQuery()->getResult();
    }
}
