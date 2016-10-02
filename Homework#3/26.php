
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>


<?php

$mas=array();

for($i=0;$i<10;$i++){

    $mas[$i]=rand(1,100) ;

}

var_dump($mas);
echo'<br>';
$res=1;
foreach ($mas as $key =>$temp){


    if(($temp>0)&&($key%2==0)){$res*=$mas[$key]; }
    elseif(($temp>0)&&($key%2!=0)){ echo $mas[$key].'<br>';}

}

echo'<br> Результат произведения равен=  '.$res;
?>

</body>
</html>
