<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

$months = array("1"=>"Январь","2"=>"Февраль","3"=>"Март",
    "4"=>"Апрель","5"=>"Май", "6"=>"Июнь", "7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
    "10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");

$month=date("n");

foreach ($months as $key=>$temp_month){

    if($key==$month ){ echo'<b> '.$temp_month.'</b> <br>';} else {echo $temp_month.'<br>';  };
}
?>
</body>
</html>
