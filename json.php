<?php

$json = '["html", "css"]';

var_dump($json);

echo '<br>';

$phpArray = json_decode($json);

var_dump($phpArray);

echo '<br>';

foreach ($phpArray as $arr) {
    echo $arr . '<br>';
}


echo "////////////////////////////////////";


$array = array('html', 'css');

var_dump($array);

echo '<br>';

$json_ = json_encode($array);

var_dump($array);