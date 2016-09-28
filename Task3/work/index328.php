<?php

echo'<table border=1px>';


for($i=1;$i<10;$i++) {
    echo '<tr>';
    for ($n = 1; $n < 10; $n++) {

        echo '<td length="25" width="25" align="center" ><b>' . $i * $n . '</b></td>';

    }
    echo '</tr>';

}