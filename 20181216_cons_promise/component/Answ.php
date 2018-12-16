<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 16.12.2018
 * Time: 19:07
 */

class Answ
{

    public function __construct()
    {

        if(isset($_GET['in'])){
            $in =  $_GET['in'];
            if($in == 'bye'){
                echo json_encode(['one', 2, 'three']);
            }else {
                echo 'Hello, ' . $_GET['in'];
            }
        }else{
            $this->showHTML();
        }
    }

    private function showHTML(){
        include 'view/in.html';
    }
}