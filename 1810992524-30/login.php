<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logedin</title>
</head>
<body>
<?php
$email = $_POST['email'];
$pwd = $_POST['pwd'];
    if(isset($_POST['submit']))
    {
        if(!empty($email) && !empty($pwd))
        {
            if($email == "nobita@techhack.tech" && $pwd = "Admin123")
            {
                // echo '<p style="text-align: center;" class="alert alert-primary">Welcome Nobita</p>';
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['pwd'] = $pwd;
                header("Location: index.php?login=success");
            } else{
                header("Location: index.php?error=notmatched");
            }
        } else {
            header("Location: index.php?error=emptyfields");
        }
    }
    if(isset($_POST['logout']))
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?");
    }
?>
</body>
</html>