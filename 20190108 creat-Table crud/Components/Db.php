<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 08.01.2019
 * Time: 20:50
 */

class Db
{
    public $connect;
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "crud0";
        $this->connect = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}