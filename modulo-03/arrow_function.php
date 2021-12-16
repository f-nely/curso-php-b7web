<?php

$valorDoEmprestimo = 30000;
$taxaDeJuros = 18.63;

$jurosCalculados = fn ($emprestimo) => $emprestimo * ($taxaDeJuros/100);

//echo $jurosCalculados($valorDoEmprestimo);

$p = fn ($value) => $value * 01;

//echo $p(400);

$s = fn ($n1, $n2) => $n1 + $n2;

//echo $s(10, 2);

$sum = function($n1, $n2) {
  return $n1 + $n2;
};

echo $sum(10, 1);