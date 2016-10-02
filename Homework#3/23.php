
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>



<?php // 1-й вариант

$var1=$_POST['var1'];

if (!(is_numeric($var1))) { echo" ВВедите число <br>";} else {
    $res = 0;

    while ($var1 != 0) {


        $res += $var1 % 10;
        $var1 /=  10;


    };

    echo $res . '<br>';
}
?>

<?php // 2-й вариант


$var1=$_POST['var1'];

if (!(is_numeric($var1))) { echo" ВВедите число";} else {

    $var1 = (string)$var1;

    $res = 0;


    for ($i = 0; $i < strlen($var1); $i++) {

        $res +=substr($var1, $i, 1);

    };

    echo $res;

}
?>

</body>
</html>
