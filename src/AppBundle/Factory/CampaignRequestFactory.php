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
            ->setDateStart($details['date_start'])
            ->setDateEnd($details['date_end'])
            ->setMaxBid(0)
            ->setStatus(1)
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
        $details = $request->request->get('campaign', []);

        $dates = $this->parsePeriod($details['period']);

        $details['date_start'] = $dates[0];
        $details['date_end'] = $dates[1];

        return $details;

    }

    private function parsePeriod($periodString='')
    {
        $splitDates = explode(' ', $periodString);

        $start_date = $this->parseDate($splitDates[0]);
        $end_date = $this->parseDate($splitDates[2]);

        return [$start_date, $end_date];
    }

    private function parseDate($dateString='')
    {
        $date = date_create_from_format('m/d/Y', $dateString);

        return $date;
    }
}