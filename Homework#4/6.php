
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

require 'function.php';

$uploaddir='gallery/';// куда грузим фото


if(!file_exists($uploaddir)){mkdir($uploaddir);} //если директории нет -создаем



if (requestIsPost()) {

    $check_files = config_check($_FILES['userfile']); //проверяем соответсвие файлов


    $uploadfoto = $_FILES['userfile'];


//var_dump($_FILES);


    foreach ($uploadfoto['tmp_name'] as $key => $var_temp_foto) {


        if (!isset ($check_files[$key])) {

            $new_name = uniqid() . '.' . getExtension($uploadfoto['name'][$key]);

            move_uploaded_file($var_temp_foto, $uploaddir . $new_name);
        } else {

            echo '<div class="foto">';

            echo 'Файл ' . $uploadfoto['name'][$key] . ' не загружен . <br>  Ошибка : ' . $check_files[$key]['error'];

            echo '</div >';
        }

    }

}

//-------------------------выводим фото------------------

$dir=scandir($uploaddir);

array_shift($dir);
array_shift($dir);

if (get('action') == 'rate_up') {






  $key_delete=get('key_delete');

  //  var_dump($dir[$key_delete]);

unlink($uploaddir.$dir[$key_delete]);

  unset($dir[$key_delete]);


}

  foreach ($dir as $key_dir=> $dir_file) {

//     var_dump($dir_file);


     echo '<div class="foto">';
//
//
      echo '<img src=' . $uploaddir.$dir_file . '>';
//
     if (file_exists($uploaddir.$dir_file)) {
         echo 'Фото загружено';
     };


 ?>

     <a href='/Homework%234/6.php?action=rate_up&amp;key_delete=<?=$key_dir?>'>Удалить фото</a>

   <?php     echo '</div >';


  }


?>



</body>
</html>
