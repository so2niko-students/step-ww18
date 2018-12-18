<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 18.12.2018
 * Time: 19:33
 */

include_once 'components/Router.php';

define('ROOT', $_SERVER['DOCUMENT_ROOT']);


$rr = new Router();

$rr->go();
