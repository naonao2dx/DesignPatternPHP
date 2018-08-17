<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 13:53
 */

namespace AbstractFactory;
include_once dirname(__FILE__) . "/../Factory/Link.php";


class ListLink extends Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        $string = "  <li><a href=\"{$this->url}\">{$this->caption}</a></li>" . PHP_EOL;
        return $string;
    }

}