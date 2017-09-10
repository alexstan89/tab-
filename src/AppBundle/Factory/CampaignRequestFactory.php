<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Campaign;
use AppBundle\Entity\CampaignProduct;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class CampaignRequestFactory
{
    /** @var  EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param   Request     $request
     *
     * @return  Campaign
     */
    public function create(Request $request)
    {
        $campaign = new Campaign();

        $details = $this->extractCampaignDetailsFromRequest($request);

        $campaign
            ->setName($details['name'])
            ->setBudget($details['budget'])
            ->setStock($details['stock'])
        ;

         foreach ($details['products'] as $id) {
            $campaign->addProduct(
                (new CampaignProduct())->setProductId($id)
            );
        } 

        return $campaign;
    }

    /**
     * @param   Request     $request
     *
     * @return  array
     */
    private function extractCampaignDetailsFromRequest(Request $request)
    {
        return $request->request->get('campaign', []);
    }
}