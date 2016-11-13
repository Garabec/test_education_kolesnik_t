<?php


//------------------PDO----------------------------------


function findBook()
{
    global $dbh;




    $books=array();

    $res=$dbh->query('SELECT * FROM book');



    while( $row = $res->fetch(PDO::FETCH_ASSOC)){


        $books[]=$row;

    }

    return $books;


}


function deleteBookId($id)
{


    global $dbh;

    return $res=$dbh->query("DELETE FROM book WHERE id={$id}");

}

function findBookId($id){

    global $dbh;


    $res=$dbh->query("SELECT * FROM book WHERE id={$id} ");


    return $res->fetch(PDO::FETCH_ASSOC);



}

function editBookId($id){

    global $dbh;

    $id = (int)$id;

    $title=post('title');
    $price=post('price');
    $description=post('description');


    return $res = $res=$dbh->query("UPDATE book SET title = '$title' ,price = '$price' ,description = '$description'
            WHERE id = {$id}");

}

function addBookId(){

    global $dbh;

    $title=post('title');
    $price=post('price');
    $description=post('description');


    return $res=$dbh->query("INSERT  INTO book(title,price,description) VALUES ( '$title','$price','$description') ");

}


//function findBook()
//{
//    global $link;
//
//    $sql = "SELECT * FROM book";
//
//    $res = mysqli_query($link, $sql);
//
//    $books=array();
//
//    while( $row=mysqli_fetch_assoc($res)){
//
//
//        $books[]=$row;
//
//    }
//
//    return $books;
//
//
//}

//function deleteBookId($id)
//{
//    global $link;
//
//    $sql = "DELETE FROM book WHERE id={$id}  ";
//
//    $res = mysqli_query($link, $sql);
//
//
//
//    return $res;
//
//}

//function findBookId($id){
//
//    global $link;
//
//    $sql = "SELECT * FROM book WHERE id={$id}  ";
//
//    $res = mysqli_query($link, $sql);
//
//
//
//    return mysqli_fetch_assoc($res);
//
//
//
//}

//function editBookId($id){
//
//    global $link;
//    $id = (int)$id;
//
//    $title=post('title');
//    $price=post('price');
//    $description=post('description');
//
//    var_dump($title);
//
//
//    $sql = " UPDATE book SET title = '$title' ,price = '$price' ,description = '$description' WHERE id = {$id}";
//
//
//    $res = mysqli_query($link, $sql);
//
//
//
//    return $res;
//
//}
