<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 11:29
 */

namespace AbstractFactory {
    include_once dirname(__FILE__) . "/../ListFactory/ListFactory.php";


    abstract class Factory
    {
        static public function getFactory($classname)
        {
            if (false == class_exists($classname)) {
                throw new \Exception(("Undefined class {$classname}."));
            }
            return new $classname;
        }

        abstract public function createLink($caption, $url);

        abstract public function createTray($caption);

        abstract public function createPage($title, $author);
    }
}