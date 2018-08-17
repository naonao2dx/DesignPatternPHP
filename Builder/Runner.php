<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 18:48
 */

namespace Builder;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/Director.php";
include_once dirname(__FILE__) . "/TextBuilder.php";
include_once dirname(__FILE__) . "/HTMLBuilder.php";
include_once dirname(__FILE__) . "/../Util.php";


class Runner extends \RunnerBase
{
    protected function exec()
    {

        // TextBuilder
        $textBuilder = new TextBuilder();
        $director1 = new Director($textBuilder);
        $director1->construct();
        $result = $textBuilder->getResult();
        println($result);

        // HTMLBuilder
        $htmlBuilder = new HTMLBuilder();
        $director2 = new Director($htmlBuilder);
        $director2->construct();
        $filename = $htmlBuilder->getResult();
        println("Maked {$filename}.");
    }
}