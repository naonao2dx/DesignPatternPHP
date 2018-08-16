<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/16
 * Time: 14:19
 */

namespace AdvStaticFactoryMethod {
    class IDCard
    {
        private $owner;

        static public function create(string $owner) : IDCard
        {
            return new IDCard($owner);
        }

        private function __construct(string $owner)
        {
            println("Make {$owner}'s card.");
            $this->owner = $owner;
        }

        function use()
        {
            println("use {$this->owner}'s card.");
        }

    }
}