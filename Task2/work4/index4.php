<?php
$length=$_POST['length'];
$time=$_POST['time'];

//!(is_numeric($length))&&!(is_numeric($time))&&!&

if ( (!is_numeric($length))||(!is_numeric($time))||(($time==0)) ) {   // проверка число - не число
    echo iconv("UTF-8", "windows-1251", 'Введите корректные значения'); }
    else{
        echo iconv("UTF-8", "windows-1251", "Скорость движения равна " . $length / $time . "  км/час");
    };
/**
 * Created by PhpStorm.
 * User: Работа
 * Date: 19.09.2016
 * Time: 19:38
 */