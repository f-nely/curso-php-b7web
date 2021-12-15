<?php

function sum(float $n1, float $n2, float $n3 = null): float
{
  return $n1 + $n2 + $n3;
}

echo sum(11, 4);