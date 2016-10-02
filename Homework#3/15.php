<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>


<?php

$mas=array(4, 2, 5, 19, 13, 0, 10);

$max_key=count($mas);

foreach ($mas as $key=> $temp) {
};

echo 'Подсчет с помощью count : '.$max_key.'<br>';
echo 'Подсчет с помощью foreach : '.$key.'   (меньше на 1 так как ключ массива начинается с нуля) <br>';

?>

</body>
</html>
