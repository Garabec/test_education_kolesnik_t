<?php

require '/book.php';




$books=findBook();

if(get('action',null) == 'delete' && get('id',null)){

    $id=get('id',null);
    $res=deleteBookId($id);

   if($res==false){
       setFlash('Error');
       redirect('/index.php?page=book_list');
   }

    setFlash('Delete book #'.$id);
    redirect('/index.php?page=book_list');


}


if(requestIsPost()) {

if (formIsValid()) {

    if (post('id')) {

        $id = post('id');
        $res = editBookId($id);

        if ($res == false) {
            setFlash('Error');
            redirect('/index.php?page=book_list');
        }

        setFlash('Edit book #' . $id);
        redirect('/index.php?page=book_list');


    } else {


        $res = addBookId();

        if ($res == false) {
            setFlash('Error');
            redirect('/index.php?page=book_list');
        }

        setFlash('Add book ');
        redirect('/index.php?page=book_list');


    }
}
}


?>
<div  class="normal">
  <a href="/index.php?page=book_edit"  class="btn btn-warning">Add Book </a>
</div>

<div style="padding: 10px 10px 10px 10px " >
<table   border="1" width="100%" cellpadding="20" cellspacing="20">
<tr>
    <th>Id</th>
    <th>Title</th>
    <th>Price</th>
    <th>Action</th>
</tr>
    <?php foreach ($books as $book ):?>
<tr>
    <td> <?=$book['id']?></td>
    <td> <?=$book['title']?></td>
    <td> <?=$book['price']?></td>
    <td> <a href="/index.php?page=book_edit&amp;id=<?=$book['id']?>">Edit</a>
         <a href="/index.php?page=book_list&amp;action=delete&amp;id=<?=$book['id']?>">Delete</a>
    </td>

</tr>
<?php endforeach; ?>

</table>
</div>