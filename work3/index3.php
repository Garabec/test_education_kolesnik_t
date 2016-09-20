<?php
$day=$_POST['day'];

switch ($day){

    case 1:echo iconv("UTF-8", "windows-1251", 'Это рабочий день');break;
    case 2:echo iconv("UTF-8", "windows-1251", 'Это рабочий день');break;
    case 3:echo iconv("UTF-8", "windows-1251", 'Это рабочий день');break;
    case 4:echo iconv("UTF-8", "windows-1251", 'Это рабочий день');break;
    case 5:echo iconv("UTF-8", "windows-1251", 'Это рабочий день');break;
    case 6:echo iconv("UTF-8", "windows-1251", 'Это выходной день');break;
    case 7:echo iconv("UTF-8", "windows-1251", 'Это выходной день');break;
    default:echo iconv("UTF-8","windows-1251", 'Неизвестный день');break;
}


/**
 * Created by PhpStorm.
 * User: Работа
 * Date: 19.09.2016
 * Time: 19:13
 */