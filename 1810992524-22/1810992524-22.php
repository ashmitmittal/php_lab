<h1>merge an array and sorting on them</h1>
<?php
    $arr_1 = array(1,9,3,6,5);
    $arr_2 = array(4,7,8,2,10);
    $arr_3 = array_merge($arr_1,$arr_2);
    sort($arr_3);
    print_r($arr_3);
?>