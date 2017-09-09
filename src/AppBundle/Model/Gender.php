<?php

namespace AppBundle\Model;

class Gender
{
    const MALE = 1;
    const FEMALE = 0;
    const ALL = 2;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $maxReach;
}