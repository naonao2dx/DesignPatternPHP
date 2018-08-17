<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/17
 * Time: 14:52
 */

namespace Adapter_Composite;


abstract class PrintClass
{
    abstract public function printWeak();
    abstract public function printStrong();
}