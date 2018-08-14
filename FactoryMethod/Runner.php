<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:31
 */
namespace FactoryMethod;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/IDCardFactory.php";

class Runner extends \RunnerBase
{
    public function exec()
    {
        $factory = new IDCardFactory();
        $card1 = $factory->create("Tom");
        $card2 = $factory->create("Nancy");
        $card3 = $factory->create("John");
        $card1->use();
        $card2->use();
        $card3->use();
    }

}