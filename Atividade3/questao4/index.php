<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e um número inteiro e retorne um novo vetor com os elementos multiplicados pelo número informado.</p>';
    $array = array(1,2,3,4,5,6,7,8,9,10);
    $multiplicador = 2;
    function multiplicadorDeArrays (array &$array, $multiplicador) : array 
    {
        for ($c = 0;$c < count($array); $c++) {
            $array[$c] *= $multiplicador;
        }
        return $array;
    }
    echo 'Array antes:<br>';
    print_r($array);
    echo ' <hr>Array depois:<br>';
    print_r(multiplicadorDeArrays($array, $multiplicador));
?>