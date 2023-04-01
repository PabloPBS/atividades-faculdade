<?php 
    echo '<p> Escreva uma função em PHP que receba duas matrizes e retorne a soma delas (considere que as matrizes têm o mesmo tamanho).</p>';
    $matriz1 = array(2,36,4,3,6,5,43,5,6,7,4,2);
    $matriz2 = array(5,6,3,-4,53,-34,24,52,-100);
    function somaVetores (array $array1, array $array2) : int
    {
        return (array_sum($array1) + array_sum($array2));
    }
    print_r($matriz1);
    echo '<hr>';
    print_r($matriz2);
    echo '<hr>';
    echo 'Soma dos valores: ';
    echo somaVetores($matriz1, $matriz2);
?>