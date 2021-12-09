<?php

$cars = [
  'S10', 
  'Jetta', 
  'Cronos', 
  'Honda Civic', 
];

$suv = [
  ...$cars, 
  'Hyunday Creta',
  'Fiat Pulse',
  'Renault Captur Turbo',
  'Volkswagen Tiguan AllSpace'
];

echo '<pre>';
print_r($suv);