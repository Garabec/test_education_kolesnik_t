

<?php

 // -------Задание 1 2 3 4--------

$name="Тимофей";
$age=36;

echo'<br>';

echo iconv("UTF-8", "windows-1251", "Меня зовут " . $name);
echo'<br>';
echo'<br>';

echo iconv("UTF-8", "windows-1251", "Мне ".$age." лет");
echo'<br>';


//--------------------------------

?>










