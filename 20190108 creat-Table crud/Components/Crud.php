<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 08.01.2019
 * Time: 20:28
 */

class Crud
{

    public function __construct()
    {

    }

    public function run()
    {
        //GET-запрос
        if(isset($_GET['action']))
        {
            $action = $_GET['action'];
            $data = $_GET['data'];

            switch ($action)
            {
                case "create":
                {
                    include_once CRUD_ROOT . "/Controllers/Create.php";
                    $create = new Create($data);

                    break;
                }
                case "select":
                {
                    include_once CRUD_ROOT . "/Controllers/Select.php";
                    $select = new Select($data);
                    break;
                }
                case "update":
                {
                    include_once CRUD_ROOT . "/Controllers/Update.php";
                    //
                    break;
                }
                case "delete":
                {
                    include_once CRUD_ROOT . "/Controllers/Delete.php";
                    //
                    break;
                }
                default:
                {
                    $this->showMenu();
                    break;
                }

            }
        }else{
            $this->showMenu();
        }

    }

    private function showMenu()
    {
        #Подключаем view
        include CRUD_ROOT . "/View/index.html";
    }
}