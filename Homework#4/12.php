<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="Homework#4/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>


<?php

function word_array( $temp_text)
{


    $mas = explode(".", $temp_text);

    var_dump($mas);
    echo '<br>'; echo '<br>';
    $n=count($mas)-1;

    for($i=$n;$i!=-1;$i--){

      if(strlen($mas[$i])!=0) {
          echo $mas[$i] . '. ';
      }

    }
}

word_array( $_POST['text1']);
?>

</body>
</html>
