<?php

$a = '1';
$b = 12.2;
$c = 12 + 3;

if (is_float($a)) {
    echo 'Integer!<br>';
} else {
    echo 'Non-integer number';
    echo '<br>';
}

if (is_float($b)) {
    echo 'Integer!', $b;
    echo '<br>';
} else {
    echo 'Non-integer number<br>';
}

echo $c;
