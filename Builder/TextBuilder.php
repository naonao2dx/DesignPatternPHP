<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 19:07
 */

namespace Builder;
include_once dirname(__FILE__) . "/Builder.php";

class TextBuilder extends Runner
{
    private $string;
    public function makeTitle(string $title)
    {
        $this->string .= "============================" . PHP_EOL;
        $this->string .= "[{$title}]" . PHP_EOL;
        $this->string .= PHP_EOL;
    }

    public function makeString(string $string)
    {
        $this->string .= "■{$string}" . PHP_EOL;
        $this->string .= PHP_EOL;
    }

    public function makeItems(array $items)
    {
        for ($i = 0; $i < count($items); $i++) {
            $this->string .= "  ・{$items[$i]}" . PHP_EOL;
        }
        $this->string .= PHP_EOL;
    }

    public function close() {
        $this->string .= "============================" . PHP_EOL;
    }

    public function getResult() : string
    {
        return $this->string;
    }

}