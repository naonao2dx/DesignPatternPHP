<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 11:51
 */

namespace AbstractFactory;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/Factory/Factory.php";
include_once dirname(__FILE__) . "/ListFactory/ListFactory.php";


class Runner extends \RunnerBase
{
    public function exec()
    {
        $classname = "AbstractFactory\ListFactory";
        $factory = Factory::getFactory($classname);

        $asahi = $factory->createLink("Asahi", "http://www.asahi.com/");
        $yomiuri = $factory->createLink("Yomiuri", "http://www.yomiuri.co.jp/");
        $yahoo = $factory->createLink("Yahoo!", "http://www.yahoo.co.jp");
        $google = $factory->createLink("Google", "http://www.google.com/");

        $traynews = $factory->createTray("News");
        $traynews->add($asahi);
        $traynews->add($yomiuri);

        $trayyahoo = $factory->createTray("Yahoo!");
        $trayyahoo->add($yahoo);

        $traysearch = $factory->createTray("Search Engine");
        $traysearch->add($google);

        $page = $factory->createPage("LinkPage", "Nao Takeuchi");
        $page->add($traynews);
        $page->add($traysearch);
        $page->output();
    }
}