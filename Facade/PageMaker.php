<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/22
 * Time: 12:10
 */

namespace Facade;
include_once dirname(__FILE__) . "/Database.php";
include_once dirname(__FILE__) . "/HTMLWriter.php";


class PageMaker
{
    private function __construct(){

    }

    static public function makeWelcomePage(string $mail)
    {
        $username = Database::getUserName($mail);
        $writer = new HTMLWriter();
        $writer->title("Welcome to {$username}'s page!");
        $writer->paragraph("This is {$username}'s page.");
        $writer->paragraph("Please enjoy!");
        $writer->link("http://google.com", "Go Back");
        $writer->close();
    }

}