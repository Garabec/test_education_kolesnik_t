
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>
<?php

$n=1000;
$num=0;
while($n>50){

    $n/=2;
    $num++;

}
echo 'Число равно = '.$n.'<br> Число итераций цикла равно = '.$num;
?>
</body>
</html>
