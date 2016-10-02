
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>




<?php
$day=$_POST['day'];

switch ($day){

    case 1:echo  'Это рабочий день';break;
    case 2:echo  'Это рабочий день';break;
    case 3:echo  'Это рабочий день';break;
    case 4:echo  'Это рабочий день';break;
    case 5:echo  'Это рабочий день';break;
    case 6:echo  'Это выходной день';break;
    case 7:echo  'Это выходной день';break;
    default:echo  'Неизвестный день';break;
}

?>

</body>
</html>