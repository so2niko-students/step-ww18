<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 29.11.2018
 * Time: 20:41
 */

class Listener
{
    private $filename;

    public function __construct($fName = "emails.txt")
    {
        $this->filename = $fName;

        //Считать почту и сообщение из $_POST

        //Записать в файл с названием emails.txt

    }

    //запись в файл
    private function write2file($email = "test@gmail.com", $text = "test")
    {

    }

}