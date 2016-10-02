
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

echo  '№1. Число 20 к типу boolean = ' ;   var_dump((bool)20); echo '<br>';
echo  '№2. Число 0 к типу boolean = ' ;   var_dump((bool)0); echo '<br>';
echo  '№3. Число -20 к типу boolean = ' ;   var_dump((bool)-20); echo '<br>';
echo '№4. 3 строки, используя три разные функции для вывода текста ' ;echo '<br>';echo '<br>';

$my_array=array(1=>'Haloo');
$str='Haloo';
// 3 функции вывода теста
print($my_array[1]); echo' - print($my_array[1] ';  echo '<br>';
echo $my_array[1];echo' - echo $my_array[1]'; echo '<br>';
printf($my_array[1]);echo' - printf($my_array[1]) '; echo '<br>';echo '<br>';

echo  '№5. 3 вида коментарий  <br> <br>' ;

echo ' # Коментарий <br> // Коментарий <br> /* Коментарий */ <br>  <br>';

# Коментарий
// Коментарий
/* Коментарий */

echo  '№6. Константы <br> <br>';

const DAYS_COUNT=7;       echo  'const DAYS_COUNT=7; <br> <br>';
define('MONTH_COUNT',12); echo  'define(\'MONTH_COUNT\',12); <br> <br>';

?>
</body>
</html>
