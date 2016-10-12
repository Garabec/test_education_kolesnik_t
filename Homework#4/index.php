<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="head">



<div class="aligin">
    <h4> Задание №1 </h4>

    <form method="post" action="1.php">

        <label   for="text1">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text1"></textarea></p>
        <label   for="text2">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text2"></textarea></p>

        <input type="submit" value="Go.... "  >

    </form>

</div>

<div class="aligin">
    <h4> Задание №2 </h4>

    <form method="post" action="2.php">

        <label   for="text1">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text1"></textarea></p>


        <input type="submit" value="Go.... "  >

    </form>

</div>

<div class="aligin">

    <h4> Задание №3 </h4>

    <form method="post" action="3.php" enctype="multipart/form-data">


        <label   for="var1">Введите число</label> <br>
        <input type="text" id="var_1" name="var1" value="" /><br><br>

        <input name="userfile" type="file" />

        <br><br>
        <input type="submit" value="Go.... "  >

    </form>

</div>


<div class="aligin">
<h4> Задание №4 </h4>

<form method="post" action="4.php" enctype="multipart/form-data">


    <label   for="dir">Введите путь директории</label> <br>
    <input type="text" id="dir" name="dir" value="c:\xampp" /><br><br>




    <input type="submit" value="Go.... "  >

</form>

</div>

</div>


<div class="head">
<div class="aligin">
    <h4> Задание №5 </h4>

    <form method="post" action="5.php" enctype="multipart/form-data">

        <label   for="word">Введите слово</label> <br>
        <input type="text" id="word" name="word" value=".bat" /><br><br>

        <label   for="dir">Введите путь директории</label> <br>
        <input type="text" id="dir" name="dir" value="c:\xampp" /><br><br>




        <input type="submit" value="Go.... "  >

    </form>

</div>

<div class="aligin">

    <h4> Задание -мультизагрузка фото №6 </h4>

    <form method="post" action="6.php" enctype="multipart/form-data">


        <label   for="userfile">Загрузите фото</label> <br>


        <input name="userfile[]" type="file" multiple  />

<br><br>
        <input type="submit" value="Go.... "  >

    </form>

</div>


<div class="aligin">

<h4> Задание №7 - Комментарии добавление удаление рейтинг </h4>

<form method="post" action="7.php">




    <input type="submit" value="Go.... "  >

</form>
</div>

<div class="aligin">

    <h4> Задание №8 </h4>

    <form method="post" action="8.php">




        <input type="submit" value="Go.... "  >

    </form>
</div>

</div>

<div class="head">

<div class="aligin">

    <h4> Задание №9 </h4>

    <form method="post" action="9.php" enctype="multipart/form-data">


        <label   for="word">Введите слово</label> <br>
        <input type="text" id="word" name="word" value="abcde" /><br><br>


        <input type="submit" value="Go.... "  >

    </form>

</div>


<div class="aligin">

    <h4> Задание №10 </h4>

    <form method="post" action="10.php">

        <label   for="text1">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text1"></textarea></p>


        <input type="submit" value="Go.... "  >

    </form>
</div>

<div class="aligin">

    <h4> Задание №11 </h4>

    <form method="post" action="11.php">

        <label   for="text1">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text1"></textarea></p>


        <input type="submit" value="Go.... "  >

    </form>
</div>

<div class="aligin">

    <h4> Задание №12 </h4>

    <form method="post" action="12.php">

        <label   for="text1">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text1"></textarea></p>


        <input type="submit" value="Go.... "  >

    </form>
</div>

</div>

<div class="head">
<div class="aligin">

    <h4> Задание №13 </h4>

    <form method="post" action="13.php">

        <label   for="text1">Напишите текст</label> <br>
        <p><textarea rows="5" cols="30" name="text1"></textarea></p>


        <input type="submit" value="Go.... "  >

    </form>
</div>

</div>



</body>
</html>
