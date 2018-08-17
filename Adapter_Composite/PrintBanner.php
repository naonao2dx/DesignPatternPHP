<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 14:53
 */

namespace Adapter_Composite;
include_once dirname(__FILE__) . "/PrintClass.php";
include_once dirname(__FILE__) . "/Banner.php";

class PrintBanner extends PrintClass
{
    private $banner;

    public function __construct(string $string)
    {
        $this->banner = new Banner($string);
    }

    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    public function printStrong()
    {
        $this->banner->showWithAster();
    }

}