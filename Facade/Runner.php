<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/22
 * Time: 11:26
 */

namespace Facade;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/PageMaker.php";
include_once dirname(__FILE__) . "/../Util.php";


class Runner extends \RunnerBase
{
    protected function exec()
    {
        PageMaker::makeWelcomePage("john@example.com");
        println("Make Facade.html");
    }

}