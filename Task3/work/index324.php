<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>



<?php // 1-й вариант

$var1=$_POST['var1']; // ограничено размерностью типа int
$var2=$_POST['var2'];



if ((!(is_numeric($var1)))&&(!(is_numeric($var2)))) { echo" ВВедите число <br>";} else {

    $var1=(int)$var1;
    $var2=(int)$var2;

    $i = 0;

    while ($var1 != 0) {


        if(($var1 % 10)==$var2) {$i++;};
        $var1 /=  10;


    };

    echo 'число вхождений = '.$i . ' - использование 1 -го варианта ограничено размерностью типа int<br>';
}
?>

<?php // 2-й вариант


$var1=$_POST['var1'];
$var2=$_POST['var2'];


$res = 0;
if ((!(is_numeric($var1)))&&(!(is_numeric($var2)))) { echo" ВВедите число";} else {

    $var1=(string)$var1;
    $var2=(string)$var2;

   $res=substr_count($var1, $var2);


    echo 'число вхождений = '.$res .'  - 2-ой вариант';

    };




?>

</body>
</html>

