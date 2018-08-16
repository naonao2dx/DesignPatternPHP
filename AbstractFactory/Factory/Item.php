<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 11:09
 */

namespace AbstractFactory {


    abstract class Item
    {
        protected $caption;

        public function __construct(string $caption)
        {
            $this->caption = $caption;
        }

        abstract public function makeHTML();
    }
}