<?php
$cookie_name = "user";
$cookie_value = "Ashi";
setcookie($cookie_name, $cookie_value, time() + 7200, "/");


if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}