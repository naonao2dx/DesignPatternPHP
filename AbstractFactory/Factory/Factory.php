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
        static public function getFactory(string $classname)
        {
            if (false == class_exists($classname)) {
                throw new \Exception(("Undefined class {$classname}."));
            }
            return new $classname;
        }

        abstract public function createLink(string $caption, string $url);

        abstract public function createTray(string $caption);

        abstract public function createPage(string $title, string $author);
    }
}