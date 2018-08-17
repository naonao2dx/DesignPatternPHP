<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 16:58
 */

namespace Composite;
include_once dirname(__FILE__) . "/Entry.php";
include_once dirname(__FILE__) . "/../Util.php";


class Directory extends Entry
{
    private $name;
    private $directory = array();

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getSize(): int
    {
        $size = 0;

        foreach ($this->directory as $entry) {
            $size += $entry->getSize();
        }
        return $size;
    }

    public function add(Entry $entry) :Entry
    {
        $this->directory[] = $entry;
        return $this;
    }

    public function printList(string $prefix = null)
    {
        println($prefix . "/" . $this->toString());

        foreach ($this->directory as $entry) {
            $entry->printList($prefix . "/" . $this->toString());
        }
    }
}