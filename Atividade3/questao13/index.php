<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e retorne um novo vetor com os elementos em ordem crescente.</p>';

    function ordenarVetor(array $array) : array
    {
        sort($array);
        $arrayOrdenado [] = $array;
        return $arrayOrdenado;
    }

    $array = [0,5,7,5,3,1,23,4,5,6,2,9,8,67,2,1];
    echo 'Array: <hr>';
    print_r($array);
    echo '<hr>Array ordenado: <hr>';
    print_r(ordenarVetor($array))
?>