<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 15:43
 */

namespace Composite;
include_once dirname(__FILE__) . "/../RunnerBase.php";
include_once dirname(__FILE__) . "/../Util.php";
include_once dirname(__FILE__) . "/Directory.php";
include_once dirname(__FILE__) . "/File.php";

class Runner extends \RunnerBase
{
    protected function exec()
    {
        println("Making root entries ...");
        $rootdir = new Directory("root1");
        $bindir = new Directory("bin");
        $tmpdir = new Directory("tmp");
        $usrdir = new Directory("usr");
        $rootdir->add($bindir);
        $rootdir->add($tmpdir);
        $rootdir->add($usrdir);
        $bindir->add(new File("vi", 10000));
        $bindir->add(new File("Latex", 20000));
        $rootdir->printList();
        println();

        println("making user entries ...");
        $yuki = new Directory("yuki");
        $hanako = new Directory("hanako");
        $tomura = new Directory("tomura");
        $usrdir->add($yuki);
        $usrdir->add($hanako);
        $usrdir->add($tomura);
        $yuki->add(new File("diary.html", 100));
        $yuki->add(new File("Composite.java", 200));
        $hanako->add(new File("memo.tex", 300));
        $tomura->add(new File("game.doc", 400));
        $tomura->add(new File("junk.mail", 500));
        $rootdir->printList();
    }
}