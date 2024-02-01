<?php

$x = "string";
echo "$x global 1 <br>";

if (true) {
    $x = "string2";
    echo "$x if <br>";
}

echo "$x global 2 <br>";

function func() //local
{
    $x =  true; //1
    echo "$x local <br>"; //variable not shared with global
}

func(); //1 local

function funcGlobal() //global
{
    global $x; //var global
    $x = true;
    echo "$x global function <br>";
}

funcGlobal(); //string2 global function
echo "$x global 3"; //1
