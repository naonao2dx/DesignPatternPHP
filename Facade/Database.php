<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/22
 * Time: 11:27
 */

namespace Facade;


class Database
{
    private function __construct()
    {
    }

    static public function getUserName(string $mail) : string
    {
        $name = array (
            "john@example.com" => "John",
            "nancy@example.com" => "Nancy"
        );
        return $name[$mail];
    }

}