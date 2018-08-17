<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/16
 * Time: 19:01
 */

namespace AdvBuilder;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/People.php";
include_once dirname(__FILE__) . "/../Util.php";

class Runner extends \RunnerBase
{
    protected function exec()
    {
        $builder = People::getBuilder("John", 37);
        $builder->mail = "builder@mail.com";
        $builder->phone = "01-2345-6789";
        $people = $builder->build();
        println("Name: {$people->name}");
        println("Age: {$people->age}");
        println("Mail: {$people->mail}");
        println("Phone: {$people->phone}");
    }
}