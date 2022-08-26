<?php
require('task03.php');
$array1 = array("Time", "flowing", "like", "a", "river");
$array2 = array("Run", "like", "hell");
echo var_dump(get_shortest($array1));
echo var_dump(get_shortest($array2));
?>