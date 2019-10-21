<?php

$text = '<p>My name is <b><i>Ashmit</i></b></p>';
echo "String with html tags :- ".$text;

echo "Now without Tags :- ".strip_tags($text);