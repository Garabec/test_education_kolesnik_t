<?php

echo iconv("UTF-8","windows-1251", '№1. Число 20 к типу boolean = ' );   var_dump((bool)20); echo '<br>';
echo iconv("UTF-8","windows-1251", '№2. Число 0 к типу boolean = ' );   var_dump((bool)0); echo '<br>';
echo iconv("UTF-8","windows-1251", '№3. Число -20 к типу boolean = ' );   var_dump((bool)-20); echo '<br>';
echo iconv("UTF-8","windows-1251", '№4. 3 строки, используя три разные функции для вывода текста ' );echo '<br>';echo '<br>';

$my_array=array(1=>'Haloo');
$str='Haloo';
// 3 функции вывода теста
print($my_array[1]); echo' - print($my_array[1] ';  echo '<br>';
echo $my_array[1];echo' - echo $my_array[1]'; echo '<br>';
printf($my_array[1]);echo' - printf($my_array[1]) '; echo '<br>';echo '<br>';

echo iconv("UTF-8","windows-1251", '№5. 3 вида коментарий  <br> <br>' );

echo iconv("UTF-8","windows-1251",' # Коментарий <br> // Коментарий <br> /* Коментарий */ <br>  ') ;echo '<br>';

# Коментарий
// Коментарий
/* Коментарий */

echo iconv("UTF-8","windows-1251", '№6. Константы <br> ' ); echo '<br>';

const DAYS_COUNT=7;       echo iconv("UTF-8","windows-1251", 'const DAYS_COUNT=7; <br> ' ); echo '<br>';
define('MONTH_COUNT',12); echo iconv("UTF-8","windows-1251", 'define(\'MONTH_COUNT\',12); <br> ' ); echo '<br>';

/**
 * Created by PhpStorm.
 * User: Работа
 * Date: 20.09.2016
 * Time: 20:20
 */