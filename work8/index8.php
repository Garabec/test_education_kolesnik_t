<?php

$a='78';
$b=78;

    var_dump($a==$b); echo iconv("UTF-8","windows-1251", ' №1 - Две переменные $a и $b равны ' ); echo '<br>';
var_dump($a===$b); echo iconv("UTF-8","windows-1251", ' №2 - Две переменные $a и $b не эквивалентны ' );

/**
 * Created by PhpStorm.
 * User: Работа
 * Date: 20.09.2016
 * Time: 19:48
 */