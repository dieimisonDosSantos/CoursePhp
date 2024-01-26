<?php

class Pessoa
{
    public $name;

    function to_speak()
    {
        echo 'Hello!!';
    }
}

$fEx = new Pessoa();
$fEx->name = "fEx1";
echo $fEx->name; //fEx1
echo "<br>";
$fEx->to_speak(); //Hello!!
echo "<br>";
