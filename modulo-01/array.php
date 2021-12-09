<?php

$cars = [
  'S10', 
  'Jetta', 
  'Cronos', 
  'Honda Civic', 
  'Jeep Compass', 
  'Logan'
];

$cars[] = 'Maverick';

echo '<pre>';
print_r($cars);

foreach ($cars as $car) {
  echo "$car <br>";
}