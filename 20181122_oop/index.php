<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 22.11.2018
 * Time: 18:53
 */
include_once "Human.php";

include "intro.html";

function test(){
    $dmitriy = new Human("Dimitr");

    $usersName = [
        "Павел",
        "Дмитрий",
        "Богдан",
        "Александр",
        "Николай"
    ];

    $users = [];

    foreach($usersName as $nameVal){
        array_push($users, new Human($nameVal));
    }

//$dmitriy->name = "Dimitrius";

//$dmitriy->introduce('Pavel');
    $dmitriy->introduce();

    echo "Users: " . Human::$users;
}

//Считать данные из GET

//Создать объект

//Запустить метод "introduce"


include "introEnd.html";