<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1810992524-24</title>
</head>
<body>
    <h1>search and replace particular value in array</h1>
    <form method="POST">
        <input type="text" name="search" placeholder="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body> -->

<!-- $people = array("Peter", "Joe", "Glenn", "Cleveland");
echo '<br>The array is: '.implode(" ",$people);
if(isset($_POST['submit'])){
$search = $_POST['search'];
if (in_array("$search", $people))
  {
  echo "<br>Match found";
  }
else
  {
  echo "<br>Match not found";
  }
} -->

<!-- </html> -->
<h1>search and replace particular value in array</h1>
<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo '<br>The array is: '.implode(" ",$people);
if (in_array("Glenn", $people))
  {
  echo "<br>Match found";
  }
else
  {
  echo "<br>Match not found";
  }
?>

<?php
$a1=array("red","green");
echo '<br>The 1st array: '.implode(" ",$a1);
$a2=array("blue","yellow");
echo '<br>The 2nd array: '.implode(" ",$a2);
// print_r(array_replace($a1,$a2));
echo '<br>array after replace: '.implode(" ",array_replace($a1,$a2));
?>