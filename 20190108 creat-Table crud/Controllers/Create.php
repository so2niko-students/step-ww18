<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 08.01.2019
 * Time: 20:40
 */

class Create
{
    private $data;
    private $db;

    public function __construct($d)
    {
        include_once CRUD_ROOT . "/Components/Db.php";
        $this->db = new Db();

        $this->data = json_decode($d, true);
        //Проверка данных


        //Формирование строки запроса
        $strSQL = $this->createSQL();
        //Создание таблицы
        $this->createTable($strSQL);

    }

    private function createSQL()
    {
        $sql = "";
        $strStart = "CREATE TABLE `crud0`.";
        $strEnd = " , PRIMARY KEY (`id`)) ENGINE = MyISAM;";

        $strTableName = "`" . $this->data['tName'] . "`";

        $rowsArr = $this->data['rows'];
        $strMid = " ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT";

        foreach ($rowsArr as $row)
        {
            $strMid .= ",  `{$row['rName']}` {$row['rType']} {$row['rNull']}";
        }

        $sql = $strStart . $strTableName . $strMid . $strEnd;

        return $sql;
    }

    private function createTable($sql)
    {
        $this->db->connect->exec($sql);
    }
}