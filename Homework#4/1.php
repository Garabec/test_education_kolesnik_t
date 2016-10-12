
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="Homework#4/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>



<?php



function getCommonWords($a,$b){



$gas=explode(" ",$a);
$mas=explode(" ",$b);

foreach ( $gas as $key=>$temp_val) {


 if( !in_array($temp_val, $mas)){ unset($gas[$key]);}


}

return $gas;

};

print_r(getCommonWords($_POST['text1'],$_POST['text2']));

?>
</body>
</html>
