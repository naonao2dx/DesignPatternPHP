<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 11:15
 */

namespace AbstractFactory;
include_once dirname(__FILE__) . "/Item.php";

abstract class Link extends Item
{
    protected $url;

    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}