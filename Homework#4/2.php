
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>


<?php







function getCommonWords($a){



    $gas=explode(" ",$a);

    $number=array();


    foreach ( $gas as $key=>$temp_val) {


       $number[$key]=strlen($temp_val);

    }

    $vivod=array_combine($gas,$number);


    arsort($vivod);

$i=1;

foreach ( $vivod as $key_vivod =>$var_vivod){

    echo $i.'место = '.$key_vivod;echo '<br>';
    $i++;

    if($i==4){break;}


}

};


getCommonWords($_POST['text1']);

?>

</body>
</html>
