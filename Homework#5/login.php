<?php





$csv = array_map('str_getcsv', file('csv/signin.csv'));

array_shift($csv);





if(requestIsPost()){

      if(formIsValid()){

              $username=$_POST['username'];
              $password=$_POST['password'];

           foreach ($csv as $temp_check){

               list($user,$passw)=$temp_check;



            if($user==$username && $passw==$password ){ $_SESSION['user']=$user;  $_SESSION['logout']='logout';

                redirect('/index.php?page=login&msg=Sign in');}


           }

       redirect('/index.php?page=login&msg=User not found');

      }




}


?>




<?php if(get('msg',null)=='Sign in'): ?>

    <h1><p class="bg-info"> <?=get('msg',null)?> </p></h1>

<?php else: ?>


<div class="container">
<h1>Sign in</h1>
    <hr>



    <h1><p class="bg-danger"><?=get('msg',null)?></p></h1>

</div>

<div class="container" >

        <div class="col-lg-4"  >
<form method="post" action="/index.php?page=login" class="form-group">
    <div class="row1">



    <input type="text"  name=username placeholder="Name" value=""> <br><br>

    <input type="text"  name=password  placeholder="Parole" value=""><br><br>

        <input type="submit" value="Go.... "  >
        </div>
</form>

    </div>

</div>

<?php endif ?>