<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/16
 * Time: 14:05
 */

namespace AdvStaticFactoryMethod;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/IDCard.php";

class Runner extends \RunnerBase
{
    protected function exec()
    {
        $card1 = IDCard::create("Tom");
        $card2 = IDCard::create("Nancy");
        $card3 = IDCard::create("John");
        $card1->use();
        $card2->use();
        $card3->use();
    }
}