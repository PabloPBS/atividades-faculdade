<?php 
    echo "<p>Escreva uma função em PHP que receba uma matriz e retorne o menor valor presente nela.</p>";
    function menorValorEmArray (array $arr1, array $arr2) : int
    {
        $menor = '';
        min($arr1) > min($arr2) ? $menor = min($arr2) : $menor = min($arr1);
        return $menor;
    }
    $matriz = [
        [5,2,6,8,4,223,24,126,986,464,264,1,45,-3,-7,-6,36],
        [4,65,6,32,7,-10,8,-11,6,53,6]
    ];
    print_r($matriz[0]);
    echo '<hr>';
    print_r($matriz[1]);
    echo '<hr> Menor valor: ';
    echo menorValorEmArray($matriz[0], $matriz[1]);
?>