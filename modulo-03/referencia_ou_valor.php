<?php

$name = 'Hcode';

function addNameToString(string &$str): string
{
  return $str .= ' - Novo Nome';
}

echo addNameToString($name);
echo '<br>';
echo $name . '<br>';

$nba_teams = ['Chicago Bulls', 'Los Angeles Lakers', 'Boston Celtics', 'New York Knicks'];

foreach ($nba_teams as $index => &$value) {
  $team_number = $index + 1;
  $value = "#$team_number - $value";
  echo $value . '<br>';
}

echo '<hr>';

var_dump($nba_teams);