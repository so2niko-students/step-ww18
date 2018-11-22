<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 22.11.2018
 * Time: 18:56
 */

class Human
{
    //Свойство
    private $name;
    public static $users;

    //Конструктор
    function __construct($nm = "Boss")
    {
        $this->name = $nm;
        Human::$users++;
    }

    //Метод
    public function introduce($oponent = "Noname", $oponent2 = "Noname2"){
        echo "Hi, $oponent and $oponent2, my name is $this->name <br>";
    }


}