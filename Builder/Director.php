<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 18:51
 */

namespace Builder;
include_once dirname(__FILE__) . "/Builder.php";

class Director
{
    private $builder;

    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    public function construct()
    {
        $this->builder->makeTitle("Greeting");
        $this->builder->makeString("from morning to noon");
        $items1 = array("good morning", "good afternoon");
        $this->builder->makeItems($items1);
        $this->builder->makeString("at night");
        $items2 = array("good evening", "good night", "good bye");
        $this->builder->makeItems($items2);
        $this->builder->close();
    }

}