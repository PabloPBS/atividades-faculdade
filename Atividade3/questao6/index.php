<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e retorne um novo vetor com os elementos em ordem inversa</p>';
    function reverteArrays (array $array) : array
    {
        return array_reverse($array);
    }
    $array = [1,2,3,4,5,6,7,8,9,10];
    echo 'Array em ordem: <hr>';
    print_r($array);
    echo '<hr>';
    $arrayReverso = reverteArrays($array);
    echo 'Array em ordem reversa: <hr>';
    print_r($arrayReverso);
?>