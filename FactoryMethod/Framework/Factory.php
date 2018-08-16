<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:38
 */

namespace FactoryMethod {


    abstract class Factory
    {
        public function create(string $owner) : Product
        {
            $product = $this->createProduct($owner);
            $this->registerProduct($product);
            return $product;
        }

        abstract protected function createProduct(string $owner);

        abstract protected function registerProduct(Product $product);
    }
}