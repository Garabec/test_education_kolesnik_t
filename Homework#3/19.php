<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

$day=date("N");


$days = array( 1 => 'Понедельник' ,2=> 'Вторник' ,3=> 'Среда' ,4=> 'Четверг' ,
    5=>'Пятница' , 6=>'Суббота' ,7=> 'Воскресенье' );

foreach ($days as $key=>$temp_day) {

    if ($key == $day) {
        echo '<b> ' . $temp_day . '</b> <br>';
    } else {
        echo $temp_day . '<br>';
    };

}
?>

</body>
</html>
