
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>


<?php





$var1=$_POST['var1'];



$mas=array(4, 2, 5, 19, 13, 0, 10);
$max_key=count($mas);

foreach ($mas as $key=> $temp) {

    if ($temp==$var1) {
        echo 'Есть <br>'; break;
    };

    if (($max_key-1)==$key){ echo 'Нет <br>'; break;}


}
?>

</body>
</html>
