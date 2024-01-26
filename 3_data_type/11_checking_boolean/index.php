<?php

$x = 1;
$z = false;
$character = "test";

if ($x != $z) {
    echo "$x is boolean.<br>"; //executed
}

if (is_bool($z)) {
    echo "$z is boolean.<br>"; //executed
} else {
    echo "$z is not boolean.<br>";
}

//

if (is_bool($character)) {
    echo "$character is boolean.<br>"; //executed
} else {
    echo "$character is not boolean.<br>";
}
