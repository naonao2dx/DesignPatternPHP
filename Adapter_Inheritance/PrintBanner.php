<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 14:16
 */
namespace Adapter_Inheritance;
include_once dirname(__FILE__) . "/PrintInterface.php";
include_once dirname(__FILE__) . "/Banner.php";


class PrintBanner extends Banner implements PrintInterface
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function printWeak()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}