<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 19:13
 */

namespace Builder;
include_once dirname(__FILE__) . "/Builder.php";

class HTMLBuilder implements Builder
{
    private $filename;
    private $string;

    public function makeTitle(string $title)
    {
        $this->filename = $title . ".html";
        $this->string = "<html><head><title>{$title}</title></head><body>" . PHP_EOL;
        $this->string .= "<h1>{$title}</h1>" . PHP_EOL;
    }

    public function makeString(string $string)
    {
        $this->string .= "<p>{$string}</p>";
    }

    public function makeItems(array $items)
    {
        $this->string .= "<ul>" . PHP_EOL;
        for ($i = 0; $i < count($items); $i++) {
            $this->string .= "<li>{$items[$i]}</li>" . PHP_EOL;
        }
        $this->string .= "</ul>" . PHP_EOL;
    }

    public function close()
    {
        $this->string .= "</body></html>";
        file_put_contents($this->filename, $this->string, LOCK_EX);
    }

    public function getResult(): string
    {
        return $this->filename;
    }
}