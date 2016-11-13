<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid">
    <h1>Homework#5  &nbsp&nbsp&nbsp <?php if(isset($_SESSION['user'])){echo 'Hi! '.$_SESSION['user'];};?>   </h1>

  <div class="row">
     <div class="navbar navbar-inverse">
         <div class="container">
             <div class="navbar-header">
                 <a class="navbar-brand" href="/index.php?page=home">Home</a>

                 <a class="navbar-brand"

                    <?php if(isset($_SESSION['logout'])): ?>
                    href="/index.php?page=logout">Logout</a>
                    <?php else: ?>
                    href="/index.php?page=login">Login</a>
                    <?php endif ?>

                 <a class="navbar-brand" href="/index.php?page=gallery">Gallery</a>
                 <a class="navbar-brand" href="/index.php?page=uploadfoto">Upload foto</a>
                 <a class="navbar-brand" href="/index.php?page=comment">Comment</a>
                 <a class="navbar-brand" href="/index.php?page=book_list">Book</a>
                 <a class="navbar-brand" href="">Page count = <?php if(isset($_SESSION['counts'])){

                     echo in_cookie('count');}
                     else{

                     echo count_cookie(); $_SESSION['counts']='stop';
                     };
                     ?>



                </a>
             </div>
             <div class="collapse navbar-collapse"></div>
         </div>

     </div>

  </div>


</div>

<h1><p class="bg-danger"><?=getFlash()?></p></h1>

<?php include $page  ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>