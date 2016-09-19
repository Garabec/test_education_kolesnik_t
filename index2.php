

<?php

    $age = $_POST['age'];

  if (!(is_numeric($age))) {   // проверка число - не число
    echo iconv("UTF-8", "windows-1251", 'Неизвестный возраст');
} else {

      if ((0 <= $age) && ($age <= 17)) {
          echo iconv("UTF-8", "windows-1251", 'Вам еще рано работать');
      };
      if ((18 <= $age) && ($age <= 59)) {
          echo iconv("UTF-8", "windows-1251", 'Вам еще работать и работать');
      };
      if (59 < $age) {
          echo iconv("UTF-8", "windows-1251", 'Вам пора на пеннсию');
      };
      if ((0 > $age)) {
          echo iconv("UTF-8", "windows-1251", 'Неизвестный возраст');
      };

  };

?>






