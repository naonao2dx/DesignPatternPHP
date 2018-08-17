<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 16:42
 */

namespace Composite;
include_once dirname(__FILE__) . "/Entry.php";
include_once dirname(__FILE__) . "/../Util.php";

class File extends Entry
{
    private $name;
    private $size;

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function printList(string $prefix = null)
    {
        println($prefix . "/" . $this->toString());
    }
}