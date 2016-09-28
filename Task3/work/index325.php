<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

$mas=array();

for($i=0;$i<10;$i++){

  $mas[$i]=rand(12,100) ;

}

$max_mas=max($mas);
$min_mas=min($mas);


echo 'Максимальное число массива= '.$max_mas.'<br>    Минимальное число массива= '.$min_mas.'<br><br>';

var_dump($mas);

echo' <h3> Меняем max и min значения местами</h3>';

list($mas[array_search($max_mas,$mas)],$mas[array_search($min_mas,$mas)] )=array($mas[array_search($min_mas,$mas)],$mas[array_search($max_mas,$mas)]);



var_dump($mas);




?>

</body>
</html>
