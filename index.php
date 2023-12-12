<?php

return (function () {
  return function(...$numeros) {
    return array_reduce($numeros, function ($total, $numero) {
      $total += $numero;
      return $total;
    });
  };
})();
