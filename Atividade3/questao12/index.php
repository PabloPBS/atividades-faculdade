<?php 
    echo '<p>Escreva uma função em PHP que receba uma matriz e retorne o maior valor presente nela.</p>';

    $matriz = [
        [1,2,3,4,5,6,7,8,9,10,230],
        [11,12,13,14,15,16,17,18,19,20]
    ];
    function maiorValorMatriz (array $arr1, array $arr2) : int
    {
        $array = array_merge($arr1, $arr2);
        return max ($array);
    }
    echo 'Matriz: <hr>';
    print_r($matriz);
    echo '<hr>Maior valor: '.maiorValorMatriz($matriz[0], $matriz[1])
?>