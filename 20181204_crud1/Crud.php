<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 04.12.2018
 * Time: 18:45
 */

class Crud
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;


    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "web2016";
        $this->password = "Password123456";
        $this->dbname = "web2016web2016";

        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    //Создание таблицы
    public function createTable($tname = "chehli")
    {

        $squery = "CREATE TABLE $tname (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(20), price FLOAT, sdate DATETIME, idate TIMESTAMP, PRIMARY  KEY (id))";

        $this->conn->exec($squery);

        $this->showMsg("Таблица $tname создана");

    }

    //Вывод сообщений
    private function showMsg($msg)
    {
        echo "<h2>Сообщение: </h2><p>$msg</p><hr>";
    }

    //Занесение в таблиу БД
    public function setSale($saleArr)
    {
        $squery = "INSERT INTO 
                   chehli
                   (name, price, sdate)
                   VALUES ('{$saleArr['name']}',{$saleArr['price']},'{$saleArr['sdate']}')";

        $this->conn->exec($squery);

        $this->showMsg("Данные занесены");
    }

    public function getSales($tname = 'chehli')
    {
        $sq = "SELECT * FROM $tname";

        //Подготовленный запрос. Объект, отвечающий за подготовленный запрос
        $preQu = $this->conn->prepare($sq);

        $preQu->execute();

        $preQu->setFetchMode(PDO::FETCH_ASSOC);
        $salesArr = $preQu->fetchAll();

        $this->showMsg("База Чехлов");

        //Это для тестирования
        echo "<pre>";
        var_dump($salesArr);
        echo "</pre>";
    }

    public function changeSale($info)
    {
        $sq = "UPDATE chehli
               SET name='{$info['name']}', price={$info['price']}
               WHERE id={$info['id']}";


        //Подготовленный запрос. Объект, отвечающий за подготовленный запрос
        $preQu = $this->conn->prepare($sq);

        $preQu->execute();



        $this->showMsg("Изменили базу");

        $this->getSales();

    }

    public function delSale($saleID = '2')
    {
        $sq = "DELETE FROM chehli WHERE id=$saleID";

        $this->conn->exec($sq);

        $this->showMsg("Удалил запись с id=$saleID");
    }

}