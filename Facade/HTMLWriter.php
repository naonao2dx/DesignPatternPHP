<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/22
 * Time: 11:39
 */

namespace Facade;


class HTMLWriter
{
    private $contents = "";

    public function __construct()
    {
    }

    public function title(string $title)
    {
        $this->contents .= "<html>" . PHP_EOL;
        $this->contents .= "<head>";
        $this->contents .= "<title>{$title}</title>" . PHP_EOL;
        $this->contents .= "</head>" . PHP_EOL;
        $this->contents .= "<body>" . PHP_EOL;
        $this->contents .= "<h1>{$title}</h1>" . PHP_EOL;
    }

    public function paragraph(string $msg)
    {
        $this->contents .= "<p>{$msg}</p>" . PHP_EOL;
    }

    public function link(string $href, string $caption)
    {
        $this->paragraph("<a href=\"{$href}\">{$caption}</a>");
    }

    public function close()
    {
        $this->contents .= "</body>" . PHP_EOL;
        $this->contents .= "</html>" . PHP_EOL;
        file_put_contents("Facade.html", $this->contents, LOCK_EX);
    }

}