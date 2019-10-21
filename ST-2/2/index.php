<?php
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Logout functionality</h1>
    <!-- <p>session variables are set already</p> -->
    <form action="" method="post">
    <button type="submit" name="logout">Logout</button>
    </form>
</body>

<?php
    session_start();
    $_SESSION['email'] = "ashi@gmail.com";
    $_SESSION['pwd'] = "admin";
    if(isset($_POST['logout']))
    {
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['email']))
    {
      echo '<p>YOU ARE LOGGED IN</p>';
    } else {
      echo '<p>YOU ARE LOGGED OUT!</p>';
    }
?>
</html>