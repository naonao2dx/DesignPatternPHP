<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 14:08
 */

namespace Adapter_Composite;
include_once dirname(__FILE__) . "/../Util.php";

class Banner
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        println("({$this->string})");
    }

    public function showWithAster()
    {
        println("*{$this->string}*");
    }

}