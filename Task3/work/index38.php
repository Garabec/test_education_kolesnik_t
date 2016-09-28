<?php

$mas=array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$str='';


foreach ($mas as $temp) {

 $str.=$temp;
}

echo $str.'<br>';

$str='';

for($i=0;$i<count($mas);$i++){

  $str.=$mas[$i] ;

}
echo $str.'<br>';

$i=0;
$str='';

while($i<count($mas)){

    $str.=$mas[$i] ;
    $i++;
}

echo $str.'<br>';

