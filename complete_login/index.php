<?php
      session_start();  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Login</title>
    <style>
    body{
      /* background: linear-gradient(to top, #400000 , 	#600000 ); */
    }
    .form-container{
        /* background: linear-gradient(to bottom, #fff , 	#fff ); */
        background-color: #980000 ;
        color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 6px 6px 10px 0px #6A33D3;
    } 
      .res{
      width: 30%;
      margin: 25px auto;
    } 
     @media only screen and (max-width: 800px) {
      .res{
        width: 100%;
      }
    } 
    </style>
  </head>
  <body>
  <div class="container-fluid">
   <div style="margin-top: 40px;">
       <h1 style="text-align: center; color: #6A33D3; margin: 0; padding: 0;">Login</h1>
       <div class="form-container res">
           <form action="login.php" method="POST">
               <div class="form-group">
                   <input class="form-control" type="email" placeholder="E-mail" name="email">
               </div>
               <div class="form-group">
                   <input class="form-control" type="password" placeholder="Password" name="pwd">
               </div>
               <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
               <div class="form-group">
                   <button class="btn btn-outline-info btn-lg mr-5" type="submit" name="submit">Login</button>
                   <button class="btn btn-outline-info btn-lg" type="submit" name="logout">Logout</button>
                   <!-- <button class="btn btn-outline-info btn-lg" href="singup.php">Signup</button> -->
                   <a class="btn btn-outline-info btn-lg" href="signup.php">Signup</a>
               </div>
           </form>
       </div>
   </div>
  </div>

  <?php
    if(isset($_GET['error']))
    {
        if($_GET['error']=="notmatched")
        {
            echo '<p style="text-align: center;" class="alert alert-danger">USERNAME OR PASSWORD NOT MATCHED</p>';
        } else if($_GET['error']=="emptyfields")
        {
            echo '<p style="text-align: center;" class="alert alert-danger">PLEASE FILL THE FILEDS</p>';
        }
    }

    if(isset($_SESSION['email']))
    {
      echo '<p style="text-align: center;" class="alert alert-success">YOU ARE LOGGED IN</p>';
    } else {
      echo '<p style="text-align: center;" class="alert alert-secondary">YOU ARE LOGGED OUT!</p>';
    }
  ?>
  </body>
</html>