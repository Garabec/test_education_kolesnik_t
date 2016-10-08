<?php

$dir=$_POST['dir'];
$word=$_POST['word'];



function list_dir($var_dir,$var_word){

$mas=scandir($var_dir);

foreach ( $mas as $temp_var) {

if(!stripos($temp_var,$var_word)===false) {
    echo $temp_var . "<br>";
}
}

}

list_dir($dir,$word);