<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/16
 * Time: 19:05
 */

namespace AdvBuilder;

interface PeopleBuilder
{
    public function build() : People;
}

class People
{
    public $name;
    public $age;
    public $mail;
    public $phone;

    private static $builder;

    public function __construct(PeopleBuilder $builder)
    {
        $this->name = $builder->name;
        $this->age = $builder->age;
        $this->mail = $builder->mail;
        $this->phone = $builder->phone;
    }

    public static function getBuilder(string $name, int $age) : PeopleBuilder
    {
        if (!is_null(self::$builder)) {
            return self::$builder;
        }

        self::$builder = new Class($name, $age) implements PeopleBuilder {
            public $name;
            public $age;
            public $mail;
            public $phone;

            public function __construct(string $name, int $age)
            {
                $this->name = $name;
                $this->age = $age;

                $this->setMail("default@mail.com");
                $this->setPhone("0000-0000-0000");
            }

            private function setMail(string $mail)
            {
                $this->mail = $mail;
            }

            private function setPhone(string $phone)
            {
                $this->phone = $phone;
            }

            public function build() : People
            {
                return new People($this);
            }
        };
        return self::$builder;
    }
}