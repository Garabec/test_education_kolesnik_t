
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


     $mas = explode(" ", trim($temp_text));

     var_dump($mas);

     echo '<br>';

     $temp_array = array();

     $i = 0;
     foreach ($mas as $key => $temp) {

         if (!in_array($temp, $temp_array)) {

             $temp_array[$i] = $mas[$key];

             $i++;
         } else {$i--;};


     }

     echo 'Количество уникальных слов = ' . $i;

 }

word_array($_POST['text1']);

?>
</body>
</html>

