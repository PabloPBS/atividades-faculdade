<?php 
    echo '<p>Escreva uma função em PHP que receba uma matriz e um número inteiro e retorne uma nova matriz com os elementos multiplicados pelo número informado</p>';

    $matriz = [
        [1,2,3,4,5],
        [6,7,8,9,10]
    ];
    $multiplicador = 2;
    function multiplicadorDeArrays (array $array1, array $array2, int $multiplicador) : array
    {
        $arrayMultiplicado = array_merge($array1, $array2);
        for ($c = 0; $c < count($arrayMultiplicado); $c++) {
            $arrayMultiplicado[$c] *= $multiplicador;
        }
        return $arrayMultiplicado;
    }

    echo 'Matriz: (Multiplicador = 2)<hr>';
    print_r($matriz);
    echo '<hr>Matriz multiplicada: <hr>';
    print_r(multiplicadorDeArrays($matriz[0], $matriz[1], $multiplicador));



    /*
    $array = [1,2,3,4,5,6,7,8,9,10];
    $multiplicador = 2;
    function multiplicadorDeArrays (array &$array, $multiplicador) : array 
    {
        for ($c = 0;$c < count($array); $c++) {
            $array[$c] *= $multiplicador;
        }
        return $array;
    }
    echo ' Multiplicador = 2 -> ';
    echo 'Array antes:<br>';
    print_r($array);
    echo ' <hr>Array depois:<br>';
    print_r(multiplicadorDeArrays($array, $multiplicador));*/
?>