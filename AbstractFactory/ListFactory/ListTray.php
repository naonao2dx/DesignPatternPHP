<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 13:56
 */

namespace AbstractFactory {
    include_once dirname(__FILE__) . "/../Factory/Tray.php";


    class ListTray extends Tray
    {
        public function __construct($caption)
        {
            parent::__construct($caption);
        }

        public function makeHTML()
        {
            $string = "<li>" . PHP_EOL;
            $string .= $this->caption . PHP_EOL;
            $string .= "<ul>" . PHP_EOL;
            foreach ($this->tray as $item) {
                $string .= $item->makeHTML();
            }
            $string .= "</ul>" . PHP_EOL;
            $string .= "</li>" . PHP_EOL;

            return $string;
        }
    }
}