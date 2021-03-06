<?php

/**
 * @return bool
 */
function requestIsPost()
{
    return strtolower($_SERVER['REQUEST_METHOD']) == 'post';
}

/**
 * @return string|null
 */
function post($key)
{
    // ?? in PHP 7
    return isset($_POST[$key]) ? $_POST[$key] : null;
}

/**
 * @return string|null
 */
function get($key,$default)
{
    // ?? in PHP 7
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}





/**
 * @return bool
 */
function formIsValid()
{
    return post('username') != ''
    && post('password') != '';
}


function formIsValidComment()
{
    return post('username') != ''
    && post('email') != ''&& post('message') != '';;
}


function count_cookie(){

    if(!isset($_COOKIE['count'])) { $count=0; }

    else { $count =  (int)$_COOKIE['count']  ;  $count++; setcookie('count', $count, time() + 60 * 60 * 24 * 366, '/');  };

  return $count;

}

function in_cookie($temp ){

    if(!isset($_COOKIE[$temp])) { $count=0; }  else {$count=$_COOKIE[$temp];} ;

 return $count;
}




function redirect($to)
{
    header('Location: ' . $to); // Location: /comments_form
    die;
}

function save( $comment ,$filename)
{
    // todo: check if array $comment has keys username, email ...return false if not

    // todo: filename to function params
    $res = file_put_contents(
        $filename,
        $comment . PHP_EOL,
        FILE_APPEND
    );

    if (!$res) {
        die('Error (');
    }
}

function checkboxIsChecked($key)
{
    return post($key) == 'on';
}

function getExtension($filename)
{
    $arr = explode('.', $filename);

    // todo: if file is like 'bla'
    // image, jpg
    return end($arr);
}

function config_check(  $files ){

    $type='image/jpeg';

    $max_size=3000000;

    foreach ($files as $key => $temp_files){

        if ($key=='type') {
            foreach ($temp_files as $key_type => $var_type) {



                if (($var_type == $type)&& (getExtension($files['name'][$key_type]) == 'jpg' || getExtension($files['name'][$key_type]) == 'jpeg')) {


                } else {
                    $files['msg'][$key_type]['error'] = 'Неправильный тип файла';
                };

            }


        }

        if ($key=='size') {
            foreach ($temp_files as $key_size => $var_size) {



                if (($var_size <= $max_size)) {


                } else {
                    $files['msg'][$key_size]['error'] = 'Неправильный размер файла';
                };

            }
        }

        if ($key=='error') {

            foreach ($temp_files as $key_error => $var_error) {

                if( $var_error){$files['msg'][$key_error]['error'] = 'Ошибка загрузки файла';  }else{


                }





            }





        }



    }




    if(isset($files['msg'])){ return $files['msg'];};
}


function setFlash($message)
{
    $_SESSION['flash_message'] = $message;
}
function getFlash()
{
    if (!isset($_SESSION['flash_message'])) {
        return null;
    }
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    return $message;
}