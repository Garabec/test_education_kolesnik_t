<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>


<?php
$var1=$_POST['var1'];
$var2=$_POST['var2'];

if(($var1==NULL)||($var2==NULL)){echo  "Заполните поля " ;}else {

if($var1==$var2) { echo  "Числа равны " ; } else {

    if ($var1 > $var2) {
        echo "Максимальное число равно = " . $var1;
    } else {
        echo  "Максимальное число равно = " . $var2;
    };
};
};
?>
</body>
</html>
