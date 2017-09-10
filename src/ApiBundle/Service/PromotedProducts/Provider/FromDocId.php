<?php

namespace ApiBundle\Service\PromotedProducts\Provider;

use ApiBundle\Library\BloomFilter;
use Doctrine\ORM\EntityManager;

class FromDocId extends Provider
{
    /** @var EntityManager $entityManager */
    protected $entityManager;

    /**
     * @param EntityManager $entityManager
     *
     * @return AssociationPersistence
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;

        return $this;
    }

    /**
     * Having a collection of DOC IDs as input.
     * It uses a Bloom Filter to check all active campaigns for matching promoted producs
     * @param array $criteria
     * @throws \InvalidArgumentException
     * @return array
     */
    public function getPromotedProducs(array $criteria)
    {
        if (empty($criteria['docIds'])) {
            throw new \InvalidArgumentException('Invalid doc id inputs!');
        }

        $bloomFilterCriteria = $this->getBloomFilter($criteria['docIds']);
        $campaignDocIds = $this->getCampaignDocIds();

        $promotedDocIds = [];

        foreach ($campaignDocIds as $campaignDocId) {
            if (!$bloomFilterCriteria->contains($campaignDocId)) {
                $promotedDocIds[] = $campaignDocId;
            }
        }

        return $promotedDocIds;

    }

    protected function getBloomFilter(array $fromSet)
    {
        $bloomFilter = new BloomFilter(1024, 14);
        foreach ($fromSet as $value) {
            $bloomFilter->add($value);
        }

        return $bloomFilter;
    }

    protected function getCampaignDocIds()
    {
        return [3452, 3453, 3456];
        $campaignsRepo = $this->entityManager->getRepository('AppBundle:Campaign');
        return $campaignsRepo->getCampaigns(['id']);
    }
}