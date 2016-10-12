
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php


/*
Задания:
1) Добавить чекбокс "показывать ли имейл"
2) comment rating +/-
3) удаление

*/

// 'copypaste' from functions.php
require 'function.php';

$flashMessage = get('flashMessage');


// if form submitted
if (requestIsPost()) {
// if data ok
if (formIsValid()) {

//settype($number,'int');

    $comment = $_POST;
    $comment['datetime'] = date('Y-m-d H:i:s');
    $comment['publish_email'] = checkboxIsChecked('publish_email');
    $comment['rating']='Рейтинг ';
    $comment['number_rating']=0;
    $comment = serialize($comment);




save($comment);

// $flashMessage = urlencode('Ok');
$flashMessage = 'Ok';

redirect('/7.php?flashMessage=' . $flashMessage);
}

$flashMessage = 'Fill the fields, please';

}


if (get('action') == 'rate_up') {

// открыть файл, взять по ключу коммент, увеличть рейт, записать все в файл


//----------------увеличение рейтинга-------------------------------------------
 if (get('key')!=NULL){



    $commentsRaw = file('comm.txt');

        if($commentsRaw) {

              $comments = unserialize($commentsRaw[get('key')]);


                      $comments['number_rating']++;



                        $commentsRaw[get('key')] = serialize($comments);




                        $fileopen = fopen('comm.txt', 'w+');


                foreach ($commentsRaw as $temp_comm) {

             $temp_comm = rtrim($temp_comm);

         file_put_contents(
            'comm.txt',
            $temp_comm . PHP_EOL,
            FILE_APPEND);

                }
        }



 };
//----------------------------увеличение рейтинга-----------------------------------------

//-----------------------------удаление коментария-----------------------------------------
if (get('key_delete')!=NULL) {

    $commentsRaw = file('comm.txt');



       unset($commentsRaw[get('key_delete')]);



    $fileopen = fopen('comm.txt', 'w+');


        foreach ($commentsRaw as $temp_comm) {

            $temp_comm = rtrim($temp_comm);

            file_put_contents(
                'comm.txt',
                $temp_comm . PHP_EOL,
                FILE_APPEND);

        }
}
//-----------------------------удаление коментария----------------------------------------

}

$commentsRaw = file('comm.txt');

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





<h1>Comments</h1>

<b><?=$flashMessage?></b>
<form method='post'>
    <div class="main" >
<div class="form" >
    <div class="field">
    <label for='username'>Username</label>
    <input type='text' value='<?=post('username')?>' name='username' id='username'>
    <br><br>
    </div>

    <div class="field">
    <label for='email'>Email</label>
    <input type='email' value='<?=post('email')?>' id='email' name='email'>
    <br><br>

    </div>

    <div class="field">


    <label for='message'>Message</label>
    <textarea name='message' id='message' rows="5" cols="22"><?=post('message')?></textarea>
    <br><br>

    </div>

    <div class="field">



    <label for='publish_email'>Показывать Email </label>
        <div class="checkbox">
    <input type='checkbox' name='publish_email' id="publish_email">
    <button>Go</button>
    </div>
         </div>
</div>
</div>
</form>

<hr>







<?php foreach ($comments as $key => $comment) : ?>


    <b> <?=$comment['username']?></b>

    <?=$comment['datetime']?>
    <?php if($comment['publish_email']){echo $comment['email'] ; } ?>

    <?=$comment['rating']?>

    <?=$comment['number_rating'].'&nbsp;&nbsp;&nbsp;'?>

    <a href='/Homework%234/7.php?action=rate_up&amp;key=<?=$key?>'>+</a>
    <?='&nbsp;&nbsp;&nbsp;'?>
    <br>
    <a href='/Homework%234/7.php?action=rate_up&amp;key_delete=<?=$key?>'>Удалить комментарий</a>

    <br>

    <?=$comment['message']?>
    <hr>

<?php  endforeach; ?>












</body>
</html>
