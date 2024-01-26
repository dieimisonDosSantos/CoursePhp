<?php

echo 'testing text';
echo "<br>";
echo "testing text with double quotes <br>";

$b = 2.02;

if (is_float($b)) {
    echo "Integer! $b"; //double quotes recognize variables
    echo '<br>';
} else {
    echo 'Non-integer number<br>';
}
