<?php

//is_int()
//returns 1 if integer, else false.
$int1 = 20;
$int2 = "s";
echo "\$int1 is " . is_int($int1) . "<br>";
echo "\$int2 is " . is_int($int2) . "<br>";

//is_numeric()
//returns 1 if number or a numeric string, else false.
$int3 = 20;
$int4 = "20";
echo "\$int3 is " . is_numeric($int3) . "<br>";
echo "\$int4 is " . is_numeric($int4) . "<br>";

//is_integer()
//returns 1 if integer, else false.
$int5 = 20;
$int6 = "20";
echo "\$int5 is " . is_integer($int5) . "<br>";
echo "\$int6 is " . is_integer($int6) . "<br>";
