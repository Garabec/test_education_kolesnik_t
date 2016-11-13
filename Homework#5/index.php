<?php
session_start();

//Открываем соединение с сервером MySQL

//$link=mysqli_connect("localhost","root","","mvc-group-609");



//-----------------PDO------------------------------------
$dsn = 'mysql:host=localhost; dbname=mvc-group-609';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    echo $e->getMessage();
}



require 'function.php';

$page=get('page','home').'.php';


require 'header.php';

