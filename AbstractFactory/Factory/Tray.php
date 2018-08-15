<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 11:17
 */

namespace AbstractFactory {
    include_once dirname(__FILE__) . "/Item.php";

    abstract class Tray extends Item
    {
        protected $tray = array();

        public function __construct($caption)
        {
            parent::__construct($caption);
        }

        public function add($item)
        {
            $this->tray[] = $item;
        }
    }
}