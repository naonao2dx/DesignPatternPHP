<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:45
 */

namespace FactoryMethod;
include_once dirname(__FILE__) . "/Product.php";
include_once dirname(__FILE__) . "/../Util.php";


class IDCard extends Product
{
    private $owner;
    function __construct($owner)
    {
        println("Make {$owner}'s card.");
        $this->owner = $owner;
    }

    function use()
    {
        println("use {$this->owner}'s card.");
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
}