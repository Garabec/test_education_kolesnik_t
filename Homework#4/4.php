<?php

$dir=$_POST['dir'];

var_dump($dir);

function list_dir($var_dir){

    $mas=scandir($var_dir);

    foreach ( $mas as $temp_var) {


        echo $temp_var . "<br>";

    }

    }

list_dir($dir);




