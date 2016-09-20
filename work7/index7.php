<?php
$var1=$_POST['var1'];
$var2=$_POST['var2'];

if(($var1==NULL)||($var2==NULL)){echo iconv("UTF-8","windows-1251", "Заполните поля " );}else {

if($var1==$var2) { echo iconv("UTF-8","windows-1251", "Числа равны " ); } else {

    if ($var1 > $var2) {
        echo iconv("UTF-8", "windows-1251", "Максимальное число равно = " . $var1);
    } else {
        echo iconv("UTF-8", "windows-1251", "Максимальное число равно = " . $var2);
    };
};
};
/**
 * Created by PhpStorm.
 * User: Работа
 * Date: 20.09.2016
 * Time: 19:15
 */