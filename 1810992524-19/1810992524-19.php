<!DOCTYPE html>
<html>
    <head>
        <title>1810992524</title>
    </head>
    <body>
        <h1>Calculator</h1>
        <form method="get">
            Number 1:<input type="text" name="num1"><br>
            Number 2:<input type="text" name="num2"><br>
            <button type="submit" name="add">+</button>
            <button type="submit" name="sub">-</button>
            <button type="submit" name="multi">X</button><br>   
            Result: <input type="text" value='<?php
        if(isset($_GET['add'])) {
            $num1= $_GET['num1'];
            $num2= $_GET['num2'];
            function add($num1,$num2) {
                $sum = $num1 + $num2;
                echo $sum;
            }
            add($num1,$num2);
        }
        if(isset($_GET['sub'])) {
            $num1= $_GET['num1'];
            $num2= $_GET['num2'];
            function sub($num1,$num2) {
                $sub = $num1-$num2;
                echo $sub;
            }
            sub($num1,$num2);
        }
        if(isset($_GET['multi'])) {
            $num1= $_GET['num1'];
            $num2= $_GET['num2'];
            function multi($num1,$num2) {
                $multi = $num1*$num2;
                echo $multi;
            }
            multi($num1,$num2);
        }
    ?>'>
        </form>
    </body>

</html>