<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

function word_array( $temp_text)
{


    $mas = explode(".", $temp_text);

    var_dump($mas);
    echo '<br>'; echo '<br>';
    foreach( $mas as $key=>$var){
        $var=trim($var);

       echo  mb_strtoupper(mb_substr($var, 0, 1, 'UTF-8'), 'UTF-8').
           mb_substr($var, 1, mb_strlen($var), 'UTF-8'); echo '<br>';

    }

}


word_array( $_POST['text1']);

?>

</body>
</html>
