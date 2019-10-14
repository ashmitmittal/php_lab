<h1>Get common elements between two lists</h1>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
echo 'First array:- '.implode(" ",$a1);
$a2=array("e"=>"red","f"=>"green","g"=>"blue","h"=>"black");
echo '<br>Second array:- '.implode(" ",$a2);
$result=array_intersect($a1,$a2);
// print_r($result);
echo '<br>Result array:- '.implode(" ",$result);
?>