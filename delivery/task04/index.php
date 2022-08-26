<?php
require('task04.php');
echo var_dump(calc('+', 1, 3));
echo var_dump(calc('+*', 4, 2));
echo var_dump(calc('*', 7, 6));
echo var_dump(calc('/', 4, 0));
echo var_dump(calc('/', 4, 3));
?>