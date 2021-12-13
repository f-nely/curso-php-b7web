<?php

$series = [
  'The man in the high castle', 
  'The expanse', 
  'Goliath', 
  'Bosch', 
  'Hanna', 
  'Tell me a story',
  'Panic'
];

foreach ($series as $serie) {
  echo $serie . '<br>';
}

echo '<br>';

foreach ($series as $key => $value) {
  echo "$key = $value <br>";
}