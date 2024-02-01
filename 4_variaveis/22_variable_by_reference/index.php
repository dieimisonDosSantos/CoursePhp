<?php

$x = 10;
$y = &$x;

echo $x; //10
echo "<br>";
echo $y; //10
echo "<br>";

$y = 15;
echo "attribution by reference"; //
echo "<br>";
echo $x; //15
echo "<br>";
echo $y; //15
echo "<br>";

$x = 20;
echo "attribution by reference 2"; //
echo "<br>";
echo $x; //20
echo "<br>";
echo $y; //20
echo "<br>";
