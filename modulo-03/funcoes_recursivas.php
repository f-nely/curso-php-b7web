<?php

function dividir($number)
{
  $metade = $number / 2;
  echo $metade . '<br>';

  if (round($metade) > 0) {
    dividir($metade);
  }
}

//dividir(100);

function fatorial($n)
{
  if ($n === 0) {
    return 1;
  } else {
    return $n * fatorial($n - 1);
  }
}

echo fatorial(5);