<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 06.11.2018
 * Time: 18:44
 */

//Подключение файлов
include "form.php";
//Подключение файлов
//require "form1.php";

include_once "functions.php";
require_once "functions.php";

//include "functions.php";

showNumber();

echo "<h2>GET:</h2><pre>";
var_dump($_GET);
echo "</pre>";
echo "<h2>POST:</h2><pre>";
var_dump($_POST);
echo "</pre>";
echo "<h2>REQUEST:</h2><pre>";
var_dump($_REQUEST);
echo "</pre>";

//Проверка на существование
if(isset($_POST['user_name']) && isset($_POST['bd'])){

    $userName = $_POST['user_name'];
    $birtDate = $_POST['bd'];

    echo "Добрый день, $userName, вы родились - $birtDate";
}


$arr0 = [
    'Hello',
    'world'
];

$arr2 = [
    [
        'login1',
        'pwd1'
    ],
    []
];

//name=>value

//https://www.google.com.ua/search?q=wiki+%D0%BD%D1%83%D0%BC%D0%B8%D0%B7%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0&rlz=1C1CHBF_ruUA813UA814&oq=%D0%B2%D0%B8%D0%BA%D0%B8+%D0%BD%D1%83%D0%BC%D0%B8%D0%B7%D0%BC%D0%B0&aqs=chrome.1.69i57j0l3.4578j0j7&sourceid=chrome&ie=UTF-8