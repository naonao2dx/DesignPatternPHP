<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 0:24
 */
declare(strict_types=1);

include_once dirname(__FILE__) . "/FactoryMethod/Runner.php";
include_once dirname(__FILE__) . "/AdvStaticFactoryMethod/Runner.php";
include_once dirname(__FILE__) . "/AbstractFactory/Runner.php";
include_once dirname(__FILE__) . "/Builder/Runner.php";
include_once dirname(__FILE__) . "/AdvBuilder/Runner.php";
include_once dirname(__FILE__) . "/Adapter_Inheritance/Runner.php";

$factoryMethod = new FactoryMethod\Runner();
$factoryMethod->run();

$advStaticFactoryMethod = new  AdvStaticFactoryMethod\Runner();
$advStaticFactoryMethod->run();

$abstractFactory = new AbstractFactory\Runner();
$abstractFactory->run();

$builder = new Builder\Runner();
$builder->run();

$advBuilder = new AdvBuilder\Runner();
$advBuilder->run();

$adapterInheritance = new Adapter_Inheritance\Runner();
$adapterInheritance->run();
