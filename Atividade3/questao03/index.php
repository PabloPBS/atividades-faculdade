<?php 
    echo '<p> Escreva uma função em PHP que receba duas matrizes e retorne a soma delas (considere que as matrizes têm o mesmo tamanho).</p><hr>';
    $matriz1 = [
        [2,36,4,3,6,5,43,5,6,7,4,2],
        [5,6,3,-4,53,-34,24,52,-100]];
    $matriz2 = [
        [4,3,4,5,21,2,4,3,45],
        [2,3,5,6,7,8,9,0,98]
    ];
    function somaVetores (array $array1, array $array2, array $array21, array $array22) : int
    {
        return (array_sum($array1) + array_sum($array2) + array_sum($array21) + array_sum($array22));
    }
    print_r($matriz1);
    echo '<hr>';
    print_r($matriz2);
    echo '<hr>';
    echo 'Soma dos valores: ';
    echo somaVetores($matriz1[0], $matriz1[1], $matriz2[0], $matriz2[1]);
?>