
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>



<?php



function getCommonWords($a,$b){



$gas=explode(" ",$a);


foreach ( $gas as $key=>$temp_val) {


 if( stristr($b, $temp_val)===false){ unset($gas[$key]);}


}

return $gas;

};

print_r(getCommonWords($_POST['text1'],$_POST['text2']));

?>
</body>
</html>
