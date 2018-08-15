<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 13:51
 */

namespace AbstractFactory {
    include_once dirname(__FILE__) . "/../Factory/Factory.php";
    include_once dirname(__FILE__) . "/ListLink.php";
    include_once dirname(__FILE__) . "/ListTray.php";
    include_once dirname(__FILE__) . "/ListPage.php";


    class ListFactory extends Factory
    {
        public function createLink($caption, $url)
        {
            return new ListLink($caption, $url);
        }

        public function createTray($caption)
        {
            return new ListTray($caption);
        }

        public function createPage($title, $author)
        {
            return new ListPage($title, $author);
        }

    }
}