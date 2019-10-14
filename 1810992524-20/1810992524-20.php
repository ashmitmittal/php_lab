<!DOCTYPE html>
<html>
    <head>
        <title>1810992524</title>
    </head>
    <body>
        <h1>area of rectangle, area of circle, triangle </h1>
        <form method="GET">
            length:<input type="text" name="len"><br>
            breadth:<input type="text" name="bre"><br>
            radius:<input type="text" name="r"><br>
            base:<input type="text" name="base"><br>
            height:<input type="text" name="h"><br>
            <button type="submit" name="rec">area of rectangle</button>
            <button type="submit" name="circ">area of circle</button>
            <button type="submit" name="tri">area of triangle</button>
        </form>
    </body>
    <?php
        if(isset($_GET['rec'])) {
            $len=$_GET['len'];
            $bre=$_GET['bre'];
            function res($len,$bre) {
                return $len*$bre;
            }
            if(!empty($len) && !empty($bre)) {
                echo "<br>area of rectangle is: ".res($len,$bre);
            } else {
                echo "<br>FILL EMPTY FIELDS";
            }

        }
        if(isset($_GET['circ'])) {
            $radius=$_GET['r'];
            function rad($radius) {
                return 3.14*$radius*$radius;
            }
            if(!empty($radius)) {
                echo "<br>area of circle: ".rad($radius);
            } else{
                echo "<br>FILL EMPTY FIELDS";
            }
        }
        if(isset($_GET['tri'])) {
            $base = $_GET['base'];
            $h = $_GET['h'];
            function triangle($base,$h) {
                return 0.5*$base*$h;
            }
            if(!empty($base) && !empty($h)) {
                echo "<br>area of triangle: ".triangle($base,$h);
            } else{
                echo "<br>FILL EMPTY FIELDS";
            }
        }
    ?>
</html>