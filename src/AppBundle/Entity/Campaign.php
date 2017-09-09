<?php

namespace AppBundle\Entity;

use AppBundle\Model\Gender;
use AppBundle\Model\Product;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="campaign")
 */
class Campaign
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @var Product[]
     */
    protected $products;

    /**
     * @var float
     *
     * @ORM\Column(type="float", scale=2)
     */
    protected $budget;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint", options={"unsigned":true})
     */
    protected $stock;

    protected $ageGroup;

    /**
     * @var Gender
     */
    protected $gender;
}
