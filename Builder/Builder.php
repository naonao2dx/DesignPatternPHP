<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 18:49
 */

namespace Builder;

interface Builder
{
    public function makeTitle(string $title);
    public function makeString(string $string);
    public function makeItems(array $items);
    public function close();
}