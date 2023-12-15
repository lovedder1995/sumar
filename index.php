<?php

// github:lovedder1995/sumar#2.0.0

return function(...$numeros) {
  return array_reduce($numeros, function ($total, $numero) {
    $total += $numero;
    return $total;
  });
};
