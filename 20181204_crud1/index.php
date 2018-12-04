<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 04.12.2018
 * Time: 18:45
 */

include_once "Crud.php";

$db = new Crud();

//Создание таблицы "Чехлы"
//$db->createTable();

//ДОбавление данных

$db->setSale([
    'name' => 'Чехол Голубой',
    'price' => 199,
    'sdate' => "2018-12-04 10:55:00"
]);

$db->setSale([
    'name' => 'Чехол Белый',
    'price' => 200,
    'sdate' => "2018-12-04 10:50:00"
]);
$db->setSale([
    'name' => 'Чехол Черный',
    'price' => 250,
    'sdate' => "2018-12-04 09:45:50"
]);


//Вывод базы данных
$db->getSales();

//Изменить поле
/*
$db->changeSale([
    'name' => 'Зеленый чехол',
    'price' => 299.99,
    'id' => 1
]);
*/

//Удалить поле
$db->delSale(3);
$db->getSales();