<?php

/**
 * null coalesce
 * A lógica do operador é a seguinte: retornar o primeiro valor que exista e não seja nulo dentre os valores passados.
 */

//$var = 11;

echo $var ?? '';

$username = $_GET['username'] ?? 'not passed';
print_r($username);

