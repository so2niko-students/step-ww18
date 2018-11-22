<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 08.11.2018
 * Time: 18:45
 */
//Строки
/*
 * int strlen($str1) - длина строки
 *
 * int strpos($where, $what) - ищет совпадение подстроки в строке
 *
 * string substr($where, $start [, $len]) - возврат подстроки из строки.
 *      $start - начальная позиция
 *      $len - сколько вырезать
 *
 * int strcmp() - Сравние строк
 *
 * string str_replace(mixed $looking, mixed $what, string $where [, int &$count]) - заменяет одно на другое
 *
 * strtoupper() - Сделать все большие
 *
 * strtolower() - сделать все маленькие
 *
 * chr() - вывод элемента из ASCII таблицы
 *
 * ord() - возвращает ascii код первого символа строки
 *
 * trim() - удаляет в начале и конце строки пробельные символы
 *
 * -------------------------------------------------------------------
 * МАССИВЫ:
 *
 * Инициализация - array(), []
 *
 * Методы прохода по массиву:
 * list() - устанавливает переменные из массива
 *
 * each() - выбирает текущий элемент массива и сдвигает указатель/счетчик массива на 1
 *
 * foreach($array as $value) - проход по массиву с присвоением каждого элемента в $value
 *      foreach($array as $key => $value)
 *
 * unset(mixed $var) - удаляет переменную или элемент массива
 *
 * count() - длина массива
 *
 * array_values() - возвращает массив из значений массива
 *
 * array_keys() - возвращает массив из ключей массива
 *
 * is_array() - проверка на массив
 *
 * explode()
 *
 * implode()
 * */
function br(){
    echo "<br>";
}


    $str = "Hello world!";
    echo strpos($str, "wo");
    br();
    echo $str[6];
    br();
    echo substr($str, 4);
    br();
    echo substr($str, 4, 3);
    br();

    $hello1 = "Hello";
    $hello2 = "Hellо";
    var_dump($hello1);
    br();
    var_dump($hello2);
    br();

    echo ($hello1 == $hello2);
    br();
    echo strcmp($hello1, $hello2);
    br();
    echo chr(35);
    br();
    echo ord($hello1);
    br();
    echo ord("Ы");
    br();
    echo "Ы"[0] . "Ы"[1];
    br();

    $arr = [11,87,4,"Павел"];
    list($age, $weight, $adress, $name) = $arr;

    echo "$name is $age year old, with $weight kg and live at Yavornitskogo, $adress";
    br();


    print_r(each($arr));
    br();
    print_r(each($arr));
    br();

    $group = [
        "Pavel" => "Жила Павел",
        "Maxim" => "Леушин Максим",
        "Anjela" => "Деревянко Анжела",
        "Dmitriy" => "Русецкий Дмитрий",
        "Bogdan" => "Самойлов Богдан"
    ];

    echo $group["Pavel"];
    br();

    $groupList = array_values($group);

    print_r($groupList);
    br();







