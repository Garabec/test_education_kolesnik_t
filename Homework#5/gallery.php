<?php

$uploaddir='gallery/';// откуда грузим фото

if(file_exists($uploaddir)) {

    $dir = scandir($uploaddir);

    array_shift($dir);
    array_shift($dir);


    if (get('action',null) == 'rate_up') {


        $key_delete = get('key_delete',null);

        //  var_dump($dir[$key_delete]);

        unlink($uploaddir . $dir[$key_delete]);

        unset($dir[$key_delete]);


        redirect('/index.php?page=gallery');



    }

    foreach ($dir as $key_dir => $dir_file) {

//     var_dump($dir_file);


        echo '<div class="foto">';
//
//
        echo '<img src=' . $uploaddir . $dir_file . '>';
//
        if (file_exists($uploaddir . $dir_file)) {

        };


        ?>

        <a href='/index.php?page=gallery&action=rate_up&amp;key_delete=<?= $key_dir ?>'>Удалить фото</a>

        <?php echo '</div >';


    }

}
?>