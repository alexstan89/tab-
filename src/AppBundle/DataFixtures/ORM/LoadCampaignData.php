<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Campaign;
use AppBundle\Entity\CampaignProduct;
use AppBundle\Factory\CampaignJsonFactory;
use AudienceBundle\Library\UserProfile\DataProvider\Product;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;

class LoadCampaignData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $finder = new Finder();

        $finder->name('CampaignsMock.json')->in('src/AppBundle/DataMock');

        foreach($finder as $file) {
            $data = json_decode(
                file_get_contents(
                    $file->getRealPath()
                ),
                true
            );

            foreach ($data as $campaignData) {
                list($productId, $productName) = $this->getRandomProduct();
                $campaignProduct = new CampaignProduct();
                $campaignProduct->setProductId($productId);
                $manager->persist($campaignProduct);

                $campaign = CampaignJsonFactory::create($campaignData);
                $campaign
                    ->setName($productName)
                    ->addProduct($campaignProduct);
                $manager->persist($campaign);

                $manager->flush();
                $manager->clear();
            }
        }


    }

    private function getRandomProduct()
    {
        $key = array_rand(Product::$products);
        return array(
            $key,
            Product::$products[$key]
        );
    }
}