<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/15
 * Time: 11:20
 */

namespace AbstractFactory {


    abstract class Page
    {
        protected $title;
        protected $author;
        protected $content = array();

        public function __construct(string $title, string $author)
        {
            $this->title = $title;
            $this->author = $author;
        }

        public function add(Item $item)
        {
            $this->content[] = $item;
        }

        public function output()
        {
            $filename = $this->title . ".html";
            file_put_contents($filename, $this->makeHTML(), LOCK_EX);
            println("Maked {$filename}.");
        }

        abstract public function makeHTML();

    }
}