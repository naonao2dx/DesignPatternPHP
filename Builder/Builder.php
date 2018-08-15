<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 18:49
 */

namespace Builder;

abstract class Builder
{
    abstract public function makeTitle($title);
    abstract public function makeString($string);
    abstract public function makeItems($items);
    abstract public function close();
}