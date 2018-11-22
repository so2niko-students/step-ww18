<?php
/**
 * Created by PhpStorm.
 * User: sotula
 * Date: 01.11.2018
 * Time: 20:08
 */

function getDayStyle(){
    $widthpx = random_int(30, 100) . "px";
    $colorR = random_int(0,255);
    $colorG = random_int(0,255);
    $colorB = random_int(0,255);

    $cssTxt = <<<PASH
.day{
    width: $widthpx;
    height: $widthpx;
    display: inline-block;
    border: 1px solid black;
    border-radius: 50%;
    background-color: rgb($colorR, $colorG, $colorB);
}
PASH;

    echo $cssTxt;
}


$myDate = mktime(25,0,0,11,2,2018);
$curDate = date("Y, F, j", $myDate);
$curDayWeek = date("N", $myDate);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личные данные</title>
    <style>
        <?php getDayStyle();?>
    </style>
</head>
<body>
    <h2>Текущая дата: <span><?php echo $curDate; ?></span></h2>
    <section>
        <?php
            while($curDayWeek--){
                echo "<div class='day'></div>";
            }
        ?>
    </section>
</body>
</html>
