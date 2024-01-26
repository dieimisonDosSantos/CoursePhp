<?php

$dogOne = ['name' => 'One', 'paws' => '4', 'color' => 'White'];
echo '<br>';
echo $dogOne['name']; //One
echo '<br>';
echo $dogOne['color']; //white
echo '<br>';
print_r($dogOne); //Array
echo '<br>';

//or

$descktop_dell_i5 = [
    'ip' => '192.1...',
    'user' => 'fEx',
    'processor' => 'i5 10500',
    'Vram' => '8000Mb',
    'motherboard' => 'H61 Ddr3 Hdmi Lga 1155',
    'number_of_usb_ports' => '6',
    'reserved_for_use' => true
];
echo '<br>';
echo $descktop_dell_i5['number_of_usb_ports']; //6
echo '<br>';
echo $descktop_dell_i5['user']; //fEx
echo '<br>';
echo $descktop_dell_i5['reserved_for_use']; //1
echo '<br>';
print_r($descktop_dell_i5); //Array
echo '<br>';
