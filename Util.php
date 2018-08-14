<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:47
 */
function println($message = null)
{
    if (is_null($message)) {
        echo PHP_EOL;
    } else {
        echo $message . PHP_EOL;
    }
}

function debugPrintln($message = null)
{
    if (defined("DEBUG")) {
        if (is_null($message)) {
            echo PHP_EOL;
        } else {
            echo "DEBUG: " . $message . PHP_EOL;
        }
    }
}