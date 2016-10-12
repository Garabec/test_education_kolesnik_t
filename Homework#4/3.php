
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="Homework#4/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
require 'function.php';

$name_file=uniqid().'.txt';
$tmp_file=$_FILES['userfile']['tmp_name'];

$uploaddir='textfile/';

if(!file_exists($uploaddir)){mkdir($uploaddir);} //если директории нет -создаем

$var=$_POST['var1'];

if (requestIsPost()) {

    move_uploaded_file($tmp_file, $uploaddir . $name_file); //загружаем в папку download


    $mas = file($uploaddir . $name_file); //загружаем в массив файл


    foreach ($mas as $key => $temp_mas) {

        $gas = explode(" ", $temp_mas);

        $str = '';

        foreach ($gas as $key1 => $temp_gas) {//

            if (strlen(rtrim($temp_gas)) <= $var) {
                $str .= $temp_gas . ' ';
            }; //ищем слова длиной меньше или равно $var


        }

        $mas[$key] = $str;

    }


    $fileopen = fopen($uploaddir . $name_file, 'w'); //открываем файл для записи


    fputs($fileopen, implode("", $mas)); // загружаем массив обратно в файл

    fclose($fileopen);

    echo 'Готово';


}
?>
</body>
</html>










