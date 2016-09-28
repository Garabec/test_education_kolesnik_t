<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>

<?php

$rows=rand(1,10);
$cols=rand(1,10);

$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo'<table border=1px>';


for($i=0;$i<$rows;$i++) {
    echo '<tr>';
    for ($n = 0; $n < $cols; $n++) {

        echo '<td length="25" width="25" align="center" bgcolor='.$colors[rand(0,count($colors)-1)].' ><b>' . rand(0,6000) . '</b></td>';

    }
    echo '</tr>';

}

?>

</body>
</html>
