<?php

session_start();

session_destroy();

redirect('/index.php?page=login');