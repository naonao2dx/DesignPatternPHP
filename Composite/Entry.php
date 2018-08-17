<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 15:46
 */

namespace Composite;
include_once dirname(__FILE__) . "/../Util.php";


abstract class Entry
{
    abstract public function getName() : string;
    abstract public function getSize() : int;

    public function add(Entry $entry)
    {
    }

    public function printList(string $prefix = null)
    {
        println("");
    }

    public function toString() : string
    {
        return $this->getName() . " (" . strval($this->getSize()) . ")";
    }
}