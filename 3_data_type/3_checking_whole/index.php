<?php


if (is_int(5)) {
    echo "true"; //true
} else {
    echo "FALSE";
}

echo "<br>";

if (is_int("it's not a number")) {
    echo "true";
} else {
    echo "false"; //false
}

echo "<br>";

$a = 10;

if (is_int($a)) {
    echo "true"; //true
} else {
    echo "false";
}
