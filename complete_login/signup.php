<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
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
     @media only screen and (max-width: 768px) {
      .res{
        width: 100%;
      }
    } 
    </style>
</head>
<body>
    
<div class="container-fluid">
   <div style="margin-top: 40px;">
       <h1 style="text-align: center; color: #6A33D3; margin: 0; padding: 0;">Sign Up</h1>
       <div class="form-container res">
           <form action="includes/signup.inc.php" method="POST">
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
                   <button class="btn btn-outline-info btn-lg mr-5" type="submit" name="signup">Signup</button>
                   <!-- <button class="btn btn-outline-info btn-lg" type="submit" name="logout">Logout</button> -->
                   <a class="btn btn-outline-info btn-lg" href="index.php">Back</a>
               </div>
           </form>
       </div>
   </div>
  </div>


</body>
</html>