<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:24
 */


include_once dirname(__FILE__) . "/FactoryMethod/Runner.php";
include_once dirname(__FILE__) . "/AdvStaticFactoryMethod/Runner.php";
include_once dirname(__FILE__) . "/AbstractFactory/Runner.php";
include_once dirname(__FILE__) . "/Builder/Runner.php";

$factoryMethod = new FactoryMethod\Runner();
$factoryMethod->run();

$advStaticFactoryMethod = new  AdvStaticFactoryMethod\Runner();
$advStaticFactoryMethod->run();

$abstractFactory = new AbstractFactory\Runner();
$abstractFactory->run();

$builder = new Builder\Runner();
$builder->run();
