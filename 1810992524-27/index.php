<h1>modifying a string/substring.</h1>
<?php
$str = "Chitkara university";
echo "Orignal string: ".$str."<br>";
$t = substr($str,5);
echo "lower: ".strtolower($str)."<br>";
echo "upper: ".strtoupper($str)."<br>";
echo "rev: ".strrev($str)."<br>";
echo "length: ".strlen($str)."<br>";
// echo trim($str, "chit");
echo "substr: ".$t;