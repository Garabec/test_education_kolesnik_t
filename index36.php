
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$ru=array();
$en=array();

foreach ($arr as $key=>$temp){

    array_unshift($en,$key);
    array_unshift($ru,$temp);

}

print_r($en); echo'<br>';
print_r($ru);


?>

</body>
</html>