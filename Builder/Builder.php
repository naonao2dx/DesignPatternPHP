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
    abstract public function makeTitle(string $title);
    abstract public function makeString(string $string);
    abstract public function makeItems(array $items);
    abstract public function close();
}