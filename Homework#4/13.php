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


    $mas = explode(" ", $temp_text);




  $temp_array=array_unique($mas);

    $frutic=array();
    $number=array();


    foreach ($temp_array as $key_temp => $var_temp_array    ) {
        $i=0;
        foreach ($mas as $key => $temp) {

            if ($var_temp_array===$temp) {


                $i++;
            };

        }


         $frutic[$key_temp]=$var_temp_array; $number[$key_temp]=$i;
    }

    $vivod=array_combine($frutic,$number);

    asort($vivod);

foreach ($vivod as $key_vivod=>$var_vivod){

  echo $key_vivod.' = '.$var_vivod;echo '<br>';

}




}

word_array( $_POST['text1']);
?>

</body>
</html>
