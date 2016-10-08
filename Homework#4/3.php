
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

$name_file=$_FILES['userfile']['name'];
$tmp_file=$_FILES['userfile']['tmp_name'];

$var=$_POST['var1'];

move_uploaded_file($tmp_file, 'C:\download\\' .$name_file); //загружаем в папку download




   $mas=file('C:\download\\' .$name_file); //загружаем в массив файл





foreach ($mas as $key=>$temp_mas){

    $gas=explode(" ",$temp_mas);

    $str='';

    foreach ($gas as $key1=>$temp_gas){//

      if(strlen(rtrim($temp_gas))<=$var){ $str.=$temp_gas.' ';  } ; //ищем слова длиной меньше $var


    }

    $mas[$key]=$str;

}



$fileopen=fopen('C:\download\\' .$name_file,'w'); //открываем файл для записи


fputs($fileopen, implode("", $mas)); // загружаем массив обратно в файл

fclose($fileopen);

echo 'Готово';

?>
</body>
</html>










