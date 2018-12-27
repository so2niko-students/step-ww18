<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 06.12.2018
 * Time: 18:54
 */

class Router
{

    private $cdb;

    //Инициализация данных, создание объекта БД из Citiesdb
    public function __construct()
    {

        $this->cdb = new Citiesdb();
    }

    //Запуск работы. Начало считывания $_GET и запуск нужного метода
    public function run()
    {
        $city = $_GET['city'];
        $do = $_GET['do'];

        if(strlen($city) == 0){
            echo '[]';

            return false;
        }

        switch ($do){
            case 'get':{
                $this->getCities($city);
                break;
            }
            case 'insert':{
                $this->insertCity($city);

                break;
            }
        }
    }

    private function getCities($c)
    {
        $cArr = $this->cdb->getCities($c);

        echo json_encode($cArr);
    }

    private function insertCity($c)
    {
        $answer = $this->cdb->insertCity($c);

        echo json_encode($answer);
    }
}