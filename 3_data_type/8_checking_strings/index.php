<?php
$a = 12;

if (is_string($a)) {
    echo "this is a string! Notice the $a";
    echo '<br>';
} else {
    echo 'is not a string<br>'; //executed
}

$b = "Name";

if (is_string($b)) {
    echo "this is a string!  Notice the $b"; //executed
    echo '<br>';
} else {
    echo 'is not a string<br>';
}

if (is_string("This is false </3")) {
    echo "this is a string!"; //executed
    echo '<br>';
} else {
    echo 'is not a string<br>';
}
