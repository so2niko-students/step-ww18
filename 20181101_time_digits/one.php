<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 01.11.2018
 * Time: 18:38
 */
//Для вывода инфорvации. И чо?
function cho($pasha){
    echo "<p> $pasha </p>";
}
//Предопределенные переменные
/*
 * $GLOBALS - МАССИВ глобальных переменных
 * $_GET
 * $_POST
 * $_SERVER
 * $_COOKIE
 * $_FILES
 * $_REQUEST - $_GET + $_POST
 * $_ENV
 * $_SESSION
 */

/* Ссылки переменных
*/
$a = 7;
$b = $a;

$b -= 2;

echo "a = $a , b = $b";
echo "<br>";

$c = 7;
$d = & $c;

$d -= 2;

echo "c = $c , d = $d";

//--------------------------------
//Константы в PHP
//Инциализация константы
define("ADMIN_NAME", "Николай Сотула");
//ADMIN_NAME = "Не Николай";

echo "<br>";
echo ADMIN_NAME;
echo "<br>";
//Проверки на существование константы
echo defined("ADMIN");

//Предопределенные константы
# __LINE__ __FILE__ __FUNCTION__ __CLASS__ __METHOD__ __DIR__

echo __FILE__ ." -- " . __DIR__;

//ОПЕРАТОРЫ
// +-*/% **
// Конкатенация .
//Условные операторы
// if, else , switch, elseif

$el = 4;

echo "<br>";
if($el == 5){
    echo "Оно равно 5. Неожиданно";
}elseif ($el == 4){
    echo "Все-таки 4";
}

if($el == 5){
    echo "Оно равно 5. Неожиданно";
}else{
    if ($el == 4){
        echo "Все-таки 4";
    }
}

//Циклы
// while, do-while, for, break, continue


//ЧИСЛА И ДАТЫ
//Округление
//

$chislo = -8.556327;

cho("Округление в большую сторону " . ceil($chislo));//-8
cho("Округление в меньшую" . floor($chislo));//-9
cho("Округление по мат. правилам" . round($chislo));//-9

//----------------------------------------------------------------------------

//Случайные числа


$ran = random_int(1,100);
//Случайные байты(в длине)
$ran2 = random_bytes(1);

cho($ran);
cho($ran2);

function randFloat(){
    $firstPart = random_int(PHP_INT_MIN,PHP_INT_MAX);
    $secondPart = random_int(PHP_INT_MIN,PHP_INT_MAX);

    return $firstPart / $secondPart;

}


cho(randFloat());
cho(PHP_INT_MIN);
cho(PHP_INT_MAX);

//Работа со временем
//текущее время в секундах
$cur = time();

cho("Секунды " . $cur);

//текущее время в милисекундах
$curmili = microtime();

cho("мс " . $curmili);

$curTime = date('l jS \of F Y h:i:s A');
$curTime2 = date('(D/l/N) (d/j)');

cho($curTime);
cho("Магия " . $curTime2);

//Установить время
$pavelBD = mktime(3,0,33,7,13,1998);

cho("Павел родился в " . date('l jS \of F Y h:i:s A',$pavelBD));