<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        pre{
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>
<?php

#Встраивание кода

/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 30.10.2018
 * Time: 20:29
 */
//Комментарий
/*      */
# Комментарий

    echo "Что-то напишу<br>";
    print "Привет. Пока";




?>

    </h1>
    <?php
        $name = "Санёк";
        $arr = [
                "Хлеб",
                "Колбаса",
                "$name пошел за колбасой",
                '$name пошел за колбасой'
            ];

        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
        echo "<pre>";
        print_r($arr);
        echo "</pre>";


        //УРОВНИ ОШИБОК
    /*
     * ERROR
     * WARNING
     * PARSE
     * NOTICE
     * DEPRECATED - ВЫ ИСПОЛЬЗУЕТЕ УСТАРЕВШИЕ ЭЛЕМЕНТЫ
     * */


    /*
     * Скалярные : boolean, integer, float, string
     * Смешанные: array, object
     * Специальные: resourse, NULL
     * Псевдотипы: mixed, number, callback
     *
     * */


    /* unset
     * isset
     * empty
     * */

        echo "<p>";
        unset($arr);
        print_r($arr);
        echo "</p>";

    ?>

    <p><?="Вчера вечером"; ?></p>
    <p><?php echo "Вчера вечером"; ?></p>
<!-- -->
<!--<script language="php">-->
<!--    echo "lalalal";-->
<!--</script>-->
</body>
</html>
