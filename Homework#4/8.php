
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>




<?php

$swearword=array('сука','падла');


if (!file_exists( 'C:\download\comm.txt' )) {

    $fileopen = fopen('C:\download\comm.txt', 'w'); //открываем файл

    fclose($fileopen);
}


    $comm = $_POST['text1'];

foreach ($swearword as $temp_swearword){

if( mb_stristr($comm,$temp_swearword) ){$comm='Некорректный комментарий'; break;


} ;
};




    file_put_contents('C:\download\comm.txt', $comm . "\n", FILE_APPEND);

    $mas = file('C:\download\comm.txt'); //загружаем в массив файл


    foreach ($mas as $temp_var) {


        echo '<div class="fort"> ';
        echo '<p>' . $temp_var . '</p>';
        echo '</div>';


    }


    $fileopen = fopen('C:\download\comm.txt', 'w');

    fputs($fileopen, implode(" ", $mas));

    fclose($fileopen);




?>

<form method="post" action="8.php">

    <label   for="text1">Напишите текст</label> <br>
    <p><textarea rows="5" cols="30" name="text1"></textarea></p>


    <input type="submit" value="Go.... "  >

</form>