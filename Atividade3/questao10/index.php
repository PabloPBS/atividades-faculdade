<?php 
    echo '<p>Escreva uma função em PHP que receba uma matriz e retorne a média dos valores presentes nela</p>';

    $matriz = [
        [1,2,3,4,5],
        [6,7,8,9,10]
    ];

    function mediaMatriz (array $arr1, array $arr2) : float
    {
        $array = array_merge($arr1, $arr2);
        $somaValores = 0;
        $mediaValores = 0;
        for ($c = 0; $c < count($array); $c++) {
            $somaValores += $array[$c];
        }
        return $mediaValores = $somaValores/(count($array));
    }
    echo 'Matriz: <hr>';
    print_r($matriz);
    echo '<hr>Média: ';
    echo mediaMatriz($matriz[0], $matriz[1])
?>