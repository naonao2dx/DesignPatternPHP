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
        public function create($owner)
        {
            $product = $this->createProduct($owner);
            $this->registerProduct($product);
            return $product;

        }

        abstract protected function createProduct($owner);

        abstract protected function registerProduct($product);
    }
}