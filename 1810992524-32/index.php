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
    <?php
        include_once 'includes/dbs.php';
        $query = "SELECT * FROM SAMPLE;";
        $result=mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['name']."<br>";
        }
    ?>
</body>
</html>