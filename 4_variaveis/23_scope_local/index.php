<?php

$x0 = "10 global <br>";
$x = &$x0;

function test()
{
    $x = 20;

    echo "$x local<br>";
}

function test2()
{
    $x = 30;

    echo "$x local2<br>";
}

echo $x; //10
test(); //20
test2(); //30

