<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>
<?php
$length=$_POST['length'];
$time=$_POST['time'];

//!(is_numeric($length))&&!(is_numeric($time))&&!&

if ( (!is_numeric($length))||(!is_numeric($time))||(($time==0)) ) {   // проверка число - не число
    echo  'Введите корректные значения'; }
    else{
        echo  "Скорость движения равна " . $length / $time . "  км/час";
    };
?>
</body>
</html>
