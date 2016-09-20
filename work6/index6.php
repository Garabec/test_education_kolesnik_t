<?php
$var1=$_POST['var1'];
$var2=$_POST['var2'];
$operator=$_POST['operator'];

if(($var2==0) && ($operator=='/')) {echo iconv("UTF-8","windows-1251", 'Ошибка! На ноль делить нельзя!' ); }else {

    switch ($operator) {

        case '+':
            $res = $var1 + $var2;
            break;
        case '-':
            $res = $var1 - $var2;
            break;
        case '*':
            $res = $var1 * $var2;
            break;
        case '/':
            $res = $var1 / $var2;
            break;
        case '%':
            $res = $var1 % $var2;
            break;

        default:
            echo iconv("UTF-8", "windows-1251", 'Введите корректный оператор');
            break;
    }

echo iconv("UTF-8","windows-1251", "Результат расчета равен = " . $res);
};
/**
 * Created by PhpStorm.
 * User: Работа
 * Date: 19.09.2016
 * Time: 22:24
 */