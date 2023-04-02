<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e retorne um novo vetor com os elementos únicos (sem repetição).</p>';

    function semDuplicatas (array $array) : array
    {
        return array_unique($array);
    }
    $vetor = [0,1,0,1,2,3,4,2,4,5,6,3,1,4,5,7,6,4,3,7,8,6,5,8,9,4,5,9,8,10];
    echo 'Vetor antes: <hr>';
    print_r($vetor);
    echo '<hr>Vetor depois: <hr>';
    print_r(semDuplicatas($vetor));
?>