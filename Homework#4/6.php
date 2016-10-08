
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php



$uploaddir='/gallery/';

if(!file_exists($uploaddir)){mkdir($uploaddir);}


foreach ($_FILES['userfile']['tmp_name'] as $key=> $var_temp_foto  ) {


    move_uploaded_file($var_temp_foto,$uploaddir.basename($_FILES['userfile']['name'][$key]));
}

foreach ($_FILES['userfile']['name'] as $var_foto){


echo '<div class="foto">';


    echo'<img src='.$uploaddir.$var_foto.'>';

if (file_exists( $uploaddir.$var_foto )) { echo 'фото загружено';};

echo '</div >';
}



?>



</body>
</html>
