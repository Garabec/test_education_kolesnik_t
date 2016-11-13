<?php


function findUser($email,$password){

    global $dbh;

    $password = md5($password); //  email=admin@adminka.com password=admin@adminka.com

    $sql = "
        SELECT email, password FROM user 
        WHERE email = ? 
        AND password = ? ";

    $sth=$dbh->prepare($sql);

    $sth->bindParam(1, $email, PDO::PARAM_STR,50);
    $sth->bindParam(2, $password, PDO::PARAM_INT);


    $sth->execute();

    $res = $sth->fetch(PDO::FETCH_ASSOC);





    return $res;





}