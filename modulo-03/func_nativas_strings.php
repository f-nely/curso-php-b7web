<?php

$name = '  James    ';

echo strlen($name) . '<br>';

$clearName =  trim($name) . '<br>';

echo strlen($clearName) . '<br>';

$name2 = 'James Holden';

echo strtolower($name2) . '<br>';

echo strtoupper($name2) . '<br>';

$modifiedName = str_replace('Holden', 'Gosling', $name2);

echo $modifiedName . '<br>';

echo substr($name2, 0, 5) . '<br>';


