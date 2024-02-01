<?php

function test()
{
    $a = 1;
    $a++;

    echo "$a <br>";
}
test();
test();
test(); //2

function testStatic()
{
    static $a = -1; //static is the value maintained between function calls
    $a++;

    echo "$a <br>";
}
testStatic(); //0
testStatic(); //1
testStatic();//2
