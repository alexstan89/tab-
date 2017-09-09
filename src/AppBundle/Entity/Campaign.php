<?php

namespace AppBundle\Entity;

use AppBundle\Model\Gender;
use AppBundle\Model\Product;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="campaigns")
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
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="CampaignProduct", mappedBy="campaign", cascade={"persist", "remove"})
     **/
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
     * @ORM\Column(type="smallint", options={"unsigned": true})
     */
    protected $stock;

    /**
     * @var Gender
     *
     * @ORM\Column(type="smallint", length=1, options={"unsigned": true})
     */
    protected $gender;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", options={"default": 1})
     */
    protected $status;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $dateStart;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $dateEnd;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    protected $maxBid;


    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param DateTime $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @return DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param DateTime $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Campaign
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isStatus()
    {
        return $this->status;
    }

    /**
     * @param boolean $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Campaign
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ArrayCollection $products
     *
     * @return Campaign
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     *
     * @return Campaign
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     *
     * @return Campaign
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    public function addProduct(CampaignProduct $product)
    {
        $product->setCampaign($this);
        $this->products->add($product);
    }
}
