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
$operator=$_POST['operator'];

if(($var2==0) && ($operator=='/')) {echo  'Ошибка! На ноль делить нельзя!' ; }else {

    switch ($operator) {

        case '+':
            $res = $var1 + $var2;echo  "Результат расчета равен = " . $res;
            break;
        case '-':
            $res = $var1 - $var2;echo  "Результат расчета равен = " . $res;
            break;
        case '*':
            $res = $var1 * $var2;echo "Результат расчета равен = " . $res;
            break;
        case '/':
            $res = $var1 / $var2;echo  "Результат расчета равен = " . $res;
            break;
        case '%':
            $res = $var1 % $var2;echo "Результат расчета равен = " . $res;
            break;

        default:
            echo  'Введите корректный оператор';
            break;
    }


};
?>
</body>
</html>
