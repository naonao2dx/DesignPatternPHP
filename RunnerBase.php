<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 1:10
 */
include_once dirname(__FILE__) . "/Util.php";

abstract class RunnerBase
{
    public function run()
    {
        println("/**** " . get_class($this) . " ****/");
        $this->exec();
    }

    abstract protected function exec();
}