<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key=>$temp){

    echo $key.'<br>';

}

echo '<br>';

foreach ($arr as $key=>$temp){

    echo $temp.'<br>';

}
?>

</body>
</html>
