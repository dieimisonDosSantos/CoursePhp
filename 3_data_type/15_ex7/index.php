<?php
$person = [
    'name' => 'fEx',
    'age' => '18',
    'skin' => 'brown',
    'height' => '1,70',
];
echo '<br>';
echo $person['name']; //fEx
echo '<br>';
echo $person['age']; //18
echo '<br>';

if ($person['age'] >= 18) {
    echo "he can pass"; //
} else {
    echo "he can't pass";
};
