<?php 
  echo '<p>Escreva uma função em PHP que receba um vetor e retorne um novo vetor com 
  os elementos que são pares.</p>';

  $vetor = [1,2,3,4,5,6,7,8,9,10];

  function pares (array $vetor) : array {
    foreach ($vetor as $num) {
        if ($num % 2 == 0) {
            $vetorPar[] = $num;
        }
    }
    return $vetorPar;
  }

  echo 'Vetor: <hr>';
  print_r($vetor);
  echo '<hr>Valores pares: <hr>';
  print_r(pares($vetor));
?>