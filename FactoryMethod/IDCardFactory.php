<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:52
 */

namespace FactoryMethod;
include_once dirname(__FILE__) . "/IDCard.php";
include_once dirname(__FILE__) . "/Factory.php";

class IDCardFactory extends Factory
{
    private $owners = array();
    protected function createProduct($owner)
    {
        return new IDCard($owner);
    }

    protected function registerProduct($product)
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners()
    {
        return $this->owners;
    }

}