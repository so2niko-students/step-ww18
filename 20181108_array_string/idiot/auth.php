<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 08.11.2018
 * Time: 20:32
 */

//Подключаем пароли
include "data/user_data.php";

/**
 * @param $usrs
 * @return string
 */
function check($usrs){
    $msg = [
        'invalidData'   => 'Data is not valid',
        'Success'       => 'Success',
        'invalidPwd'    => 'Password is invalid',
        'invalidLgn'    => 'Login is invalid',
    ];

    //Проверяем, послали ли нам логин и пароль
    if(strlen($_GET['pas']) == 0 || strlen($_GET['log']) == 0){
        return $msg['invalidData'];
    }

    //Если успеем - валидируем логин и пароль
    $log = $_GET['log'];
    $pas = $_GET['pas'];

    //Проверяем наличие логина в массиве.
    foreach($usrs as $k => $val){
        if(strcmp($k, $log) == 0){
            if(strcmp($val, $pas) == 0){
                return $msg['Success'];
            }else{
                return $msg['invalidPwd'];
            }
        }
    }

    return $msg['invalidLgn'];
}

echo check($users);