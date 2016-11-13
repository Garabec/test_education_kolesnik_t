<?php

require "book.php";

$id=get('id',null);

if($id){

 $book=findBookId($id);

}

else{

    $book['id']=null;
    $book['title']=null;
    $book['price']=null;
    $book['description']=null;
    $book['is_active']=null;


}

?>
<div class="container" >



<form method="post" action="/index.php?page=book_list">
    <input  type="hidden"  name="id" value="<?=$book['id']?>">

    Title: <div class="container"  > <input  type="text" name="title" value="<?=$book['title']?>"><br><br>
    </div>
    Price: <div class="container"  >  <input  type="text" name="price" value="<?=$book['price']?>"><br><br>
</div>
    Description: <div class="container"  > <textarea name="textarea"  cols="100" rows="10"><?=$book['description']?></textarea><br>
</div>
    Is active: <input type="checkbox" name="is_active" <?=$book['is_active'] ? 'checked': '' ?> > <br>
    <button>Save</button>


</form>


    </div>