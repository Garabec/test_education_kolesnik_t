
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>

<body>
<?php

    $age = $_POST['age'];

  if (!(is_numeric($age))) {   // проверка число - не число
    echo  'Неизвестный возраст';
} else {

      if ((0 <= $age) && ($age <= 17)) {
          echo  'Вам еще рано работать';
      };
      if ((18 <= $age) && ($age <= 59)) {
          echo 'Вам еще работать и работать';
      };
      if (59 < $age) {
          echo  'Вам пора на пеннсию';
      };
      if ((0 > $age)) {
          echo 'Неизвестный возраст';
      };

  };

?>

</body>
</html>




