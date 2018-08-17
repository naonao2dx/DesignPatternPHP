<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 14:07
 */

namespace Adapter_Inheritance;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/PrintBanner.php";

class Runner extends \RunnerBase
{
    public function exec()
    {
        $p = new PrintBanner("Hello!");
        $p->printWeak();
        $p->printStrong();
    }

}