<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:52
 */

namespace FactoryMethod;
include_once dirname(__FILE__) . "/IDCard.php";
include_once dirname(__FILE__) . "/../Framework/Factory.php";

class IDCardFactory extends Factory
{
    private $owners = array();

    protected function createProduct(string $owner): IDCard
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product)
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners(): array
    {
        return $this->owners;
    }

}