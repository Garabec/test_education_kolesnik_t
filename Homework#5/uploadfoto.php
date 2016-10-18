
<?php  if(isset($_SESSION['user'])): ?>


<div class="col-lg-4">


<form method="post" action="/index.php?page=uploadfoto" enctype="multipart/form-data">


    <label   for="userfile">Загрузите фото в галерею</label> <br>


    <input name="userfile[]" type="file" multiple  />

    <br><br>
    <input type="submit" value="Go.... "  >

</form>

</div>





<?php

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

            echo '<div class="mesage">';

            echo 'Файл ' . $uploadfoto['name'][$key] . '  загружен успешно. <br>   ' ;

            echo '</div >';

        } else {

            echo '<div class="mesage">';

            echo 'Файл ' . $uploadfoto['name'][$key] . ' не загружен .   Ошибка : ' . $check_files[$key]['error'].'<br>';

            echo '</div >';
        }

    }

}
?>

<?php else:         ?>

    <h2> Чтобы загрузить фото зарегистрируйтесь</h2>

<?php  endif ?>