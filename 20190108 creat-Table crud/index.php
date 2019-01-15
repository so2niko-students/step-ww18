<?php
#Константы окружения
define("CRUD_ROOT", __DIR__);

include_once CRUD_ROOT . "/Components/Crud.php";

$router = new Crud();

$router->run();

//http://localhost/WEB/index.php?action=create&data={"tName":"test","rows":[{"rName":"name0", "rType":"VARCHAR(100)", "rNull":"NULL"}]}
//http://localhost/WEB/index.php?action=select&data={"tName":"test"}