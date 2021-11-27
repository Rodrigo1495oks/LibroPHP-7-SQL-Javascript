<?php

use User as GlobalUser;

$object = new User();

$object->name = 'Alice';

echo $object->name;

class User
{
}


// declaracion de constants

Translate::lookup();

class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;
    // ...
    static function lookup()
    {
        echo self::SPANISH;
    }
}


class Example
{
    var $name = 'Rodrigo';
    public $age = 23;
    protected $usercount;

    private function admin() {
        # code...
    }
}

// metodos estaticos

User::pwdString();

class User{
    static function pwdString(){
        echo "Please enter your password";
    }
}

// ejemplo 5-22 - definicion de una clase con propiedad estatica.

$temp= new Test();

echo "Test A: ". Test::$staticProperty . "<br>";
echo "Test A: ". $temp->getSp() . "<br>";
echo "Test A: ". $temp->$staticProperty . "<br>";


class Test{
    static $staticProperty='Im static';

    function getSp(){
        return self::$staticProperty;
    }
}

// herencia------------------------------

// ejemplo 5-23--------------------------

$object=new Suscriber;
$object->name="Fred";
$object->password='pword';
$object->phone="012 345 66789";
$object->email="fred@bloggs.com";
$object->display();

class User{
    public $name, $password;

    function saveUser(){
        echo "Save User code goes here";
    }


}

class Suscriber extends User{
    public $phone, $email;

    function display(){
        echo "Name: ".$this->name."<br>";
        echo "pass: ".$this->password."<br>";
        echo "phone: ".$this->phone."<br>";
        echo "email: ".$this->email."<br>";
    }
}


// la palabra reservada parent

// ejemplo 5-24 - redefiniciion de un metodo y uso del operador parent ---



class Dad{
    function test(){
        echo "[Class dad] Iam your Father <br>";
    }
}

class Son extends Dad{
    function test(){
        echo "[Class Son] Iam Luke <br>";

    }

    function test2(){
        parent::test();
    }
}


// ejemplo 5-25 llamada al constructor de la clase padre

$animal=new  Tiger();

echo "tigers have... <br>";
echo "fur?: ".$animal->fur."<br>";
echo "Stripes: ".$animal->stripes;

class WildCat{
    public $fur; //wilcats have fur

    function __construct()
    {
        $this->fur=true;
    }
}

class Tiger extends WildCat{
    public $striper; // Tigers have stripers

    function __construct(){
        $this->fur="true";

        parent::__construct();

            $this->stripes="TRUE";
        
    }
}

// metodo final

// ejemplo 5-26 - creacion d eun metodo final

class User{
    final function copyright(){
        echo "This class was written by Joe Smith";
    }
}


