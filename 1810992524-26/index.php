<!DOCTYPE html>
<html>
<head>
    <title>String</title>
</head>
<body>
    <h1>reading and displaying strings</h1>
    <form method="post">
       Enter string: <input type="text" name="str"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
<?php
    if(isset($_POST['submit'])) {
        $str = $_POST['str'];
        echo "String is: ".$str;
    }
?>
</html>