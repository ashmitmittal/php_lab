<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Conection</title>
</head>
<body>
<h1>Database connection</h1>
<form action="" method="POST">
    <input type="text" name="name">
    <button type="submit" name="submit">Submit</button>
</form>
<form method="POST">
    <button type="submit" name="show">Show data</button>
</form>
    <?php
    if(isset($_POST['show'])){
        include_once 'includes/dbs.php';
        $query = "SELECT * FROM SAMPLE;";
        $result=mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['name']."<br>";
        }
    }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        include_once 'includes/dbs.php';
        $query = "INSERT INTO SAMPLE(name) VALUE('$name');";
        if(!mysqli_query($con,$query)){
            echo 'error';
        }
    }
    ?>
</body>
</html>