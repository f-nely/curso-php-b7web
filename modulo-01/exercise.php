<?php

$lista = [
  'nome' => 'Bonieky',
  'idade' => 42,
  'atributos' => [
    'forca' => 60,
    'agilidade' => 80,
    'destreza' => 50
  ],
  'vida' => 1000,
  'mana' => 928
];

//var_dump($lista);
echo "Nome: $lista[nome] <br>";
echo 'Força ' . $lista['atributos']['forca'];