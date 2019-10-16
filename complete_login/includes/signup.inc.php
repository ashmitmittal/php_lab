<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>


<?php
if(isset($_POST['signup']))
{
    include_once 'dbs.php';
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    if(empty($email) || empty($pwd))
    {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup.php?error=invalidmail");
        exit();
    }
    else
    {
        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } 
        else
        {
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0)
            {
                header("Location: ../signup.php?error=taken");
                exit();
            }
            else
            {
                $sql = "INSERT INTO users (email,pwd) VALUES(?,?);";
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt,$sql))
                {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else 
                {
                    mysqli_stmt_bind_param($stmt,"ss",$email,$pwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
else
{
    header("Location: ../signup.php?asshole");
}
?>
</body>
</html>
