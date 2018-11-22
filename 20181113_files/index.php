<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 13.11.2018
 * Time: 19:21
 */
//Подключаю библиотеку функций
include_once "funcs.php";

//Проверка на наличие данных для создания файла
if(ifData()){
    setFile($_POST['fName'], $_POST['fText']);
    setLog($_POST['fName']);
}

//Подключаю форму
getHeader();
getForm();

readLog();
dataDir();

getFooter();