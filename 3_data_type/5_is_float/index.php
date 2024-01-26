<?php

$a = 'text';
$A = 12.2;

if (is_float($a)) {
    echo 'Integer!<br>';
} else {
    echo 'Non-integer number<br>'; //executed
}

if (is_float($A)) {
    echo 'Integer!<br>'; //executed
} else {
    echo 'Non-integer number<br>';
}
