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
$i=0;
foreach ($mas as $key=> $temp) {
    $i++;
};

echo 'Подсчет с помощью count : '.$max_key.'<br>';
echo 'Подсчет с помощью foreach : '.$i.'   <br>';

?>

</body>
</html>
