<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 13.11.2018
 * Time: 19:12
 */

//Запись в файл
function setFile($fName, $fText){
    //fopen - возвращает указатель на файл для работы с этим файлом
    $fPointer = fopen($fName, "x");
    //ЗАпись данных в файл
    fwrite($fPointer, $fText);
    //Умышленно удаляю указатель на файл
    fclose($fPointer);
//    unset($fPointer);
}

//Проверка на наличие данных
function ifData(){
    if(isset($_POST['fName']) && isset($_POST['fText'])){
        if (strlen($_POST['fName']) > 0 && strlen($_POST['fText']) > 0){
            return true;
        }
    }

    return false;
}

function setLog($fName){
    $time = date(DATE_ATOM);
    $fPo = fopen('log.txt', "a");

    fwrite($fPo, $fName . " -- " . $time . PHP_EOL);

    fclose($fPo);
}

function getHeader(){
    include "view/header.html";
}

function getForm(){
    include "view/form.html";
}

function getFooter(){
    include "view/footer.html";
}

function readLog(){
    $filename = 'log.txt';
    $fSize = filesize($filename);

    $fP = fopen($filename, "r");

    $myData = fread($fP,$fSize);

    echo "<pre>$myData</pre>";

    fclose($fP);
}

function dataDir(){
    $arr = scandir(__DIR__);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}