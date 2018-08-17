<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 14:04
 */

namespace AbstractFactory;
include_once dirname(__FILE__) . "/../Factory/Page.php";


class ListPage extends Page
{
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    public function makeHTML(): string
    {
        $string = "<html><head><title>{$this->title}</title></head>" . PHP_EOL;
        $string .= "<body>" . PHP_EOL;
        $string .= "<h1>{$this->title}</h1>" . PHP_EOL;
        $string .= "<ul>" . PHP_EOL;
        foreach ($this->content as $item) {
            $string .= $item->makeHTML();
        }
        $string .= "</ul>" . PHP_EOL;
        $string .= "<hr><address>{$this->author}</address>";
        $string .= "</body></html>" . PHP_EOL;
        return $string;
    }

}