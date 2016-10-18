

<?php

$file_text_comment='comments.txt';

if(!file_exists($file_text_comment)) {$file=fopen($file_text_comment,'w'); fclose($file);};


$flashMessage = get('flashMessage',null);






// if form submitted
if (requestIsPost()) {
// if data ok
if (formIsValidComment()) {

//settype($number,'int');

$comment = $_POST;
$comment['datetime'] = date('Y-m-d H:i:s');
$comment['publish_email'] = checkboxIsChecked('publish_email');
$comment['rating']='Рейтинг ';
$comment['number_rating']=0;
$comment = serialize($comment);




save($comment,$file_text_comment);

// $flashMessage = urlencode('Ok');
$flashMessage = 'Ok';

redirect('/index.php?page=comment&flashMessage=' . $flashMessage);
}

$flashMessage = 'Fill the fields, please';

}


if (get('action',null) == 'rate_up') {

// открыть файл, взять по ключу коммент, увеличть рейт, записать все в файл


//----------------увеличение рейтинга-------------------------------------------
if (get('key',null)!=NULL){



$commentsRaw = file('comments.txt');

if($commentsRaw) {

$comments = unserialize($commentsRaw[get('key',null)]);


$comments['number_rating']++;



$commentsRaw[get('key',null)] = serialize($comments);




$fileopen = fopen('comments.txt', 'w+');


foreach ($commentsRaw as $temp_comm) {

$temp_comm = rtrim($temp_comm);

file_put_contents(
'comments.txt',
$temp_comm . PHP_EOL,
FILE_APPEND);

}
}



};
//----------------------------увеличение рейтинга-----------------------------------------

//-----------------------------удаление коментария-----------------------------------------
if (get('key_delete',null)!=NULL) {

$commentsRaw = file('comments.txt');



unset($commentsRaw[get('key_delete',null)]);



$fileopen = fopen('comments.txt', 'w+');


foreach ($commentsRaw as $temp_comm) {

$temp_comm = rtrim($temp_comm);

file_put_contents(
'comments.txt',
$temp_comm . PHP_EOL,
FILE_APPEND);

}
}
//-----------------------------удаление коментария----------------------------------------

}

$commentsRaw = file('comments.txt');

$comments = [];


foreach ($commentsRaw as $comment) {
$comments[] = unserialize($comment);
}




// todo ??
// array_walk($commentsRaw, function(&$element) {
// return unserialize($element);
// });

// print_r($commentsRaw);

?>



<?php  if(isset($_SESSION['user'])): ?>



<div class="container" >

    <h1>Comments</h1>

    <b><?=$flashMessage?></b>

    <div class="col-lg-4"  >
        <form  method="post" action="/index.php?page=comment" class="form-group">
            <div class="row1">

                <?php  if(isset($_SESSION['user'])): ?>

                <input type="text"  name=username placeholder="Name" value=<?=$_SESSION['user']?> > <br><br>

                <?php else:         ?>

                <input type="text"  name=username placeholder="Name" value=""> <br><br>


                <?php  endif ?>


                <input type="text"  name=email  placeholder="Email" value=""><br><br>

                <textarea name='message'  placeholder="Comments..."    id='message' rows="5" cols="51"><?=post('message')?></textarea><br><br>

                <input type="submit" value="Go.... "  >
            </div>
        </form>

    </div>

</div>


<?php else:         ?>

    <h2> Чтобы писать комментарии зарегистрируйтесь</h2>

<?php  endif ?>


<hr>




<div class="container" >


<?php foreach ($comments as $key => $comment) : ?>


    <b> <?=$comment['username']?></b>

    <?=$comment['datetime']?>
    <?php if($comment['publish_email']){echo $comment['email'] ; } ?>

    <?=$comment['rating']?>

    <?=$comment['number_rating'].'&nbsp;&nbsp;&nbsp;'?>

    <a href='/index.php?page=comment&action=rate_up&amp;key=<?=$key?>'>+</a>
    <?='&nbsp;&nbsp;&nbsp;'?>
    <br>
    <a href='/index.php?page=comment&action=rate_up&amp;key_delete=<?=$key?>'>Удалить комментарий</a>

    <br>

    <?=$comment['message']?>
    <hr>

<?php  endforeach; ?>


</div>









</body>
</html>