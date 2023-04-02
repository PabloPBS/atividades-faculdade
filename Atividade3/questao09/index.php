<?php 
    echo '<p>Escreva uma função em PHP que receba uma matriz e retorne um novo vetor com os elementos únicos (sem repetição)</p>';

    $matriz = [
        [1,2,3,4,5,6,7,8,9,10],
        [11,1,12,2,13,3,14,4,15,5]
    ];

    function semDuplicatas2 (array $array1, array $array2) : array
    {
        $vetor = array_merge($array1, $array2);
        return array_unique($vetor);
    }

    echo 'Matriz antes: <hr>';
    print_r($matriz);
    echo '<hr> Matriz depois: <hr>';

    print_r(semDuplicatas2($matriz[0], $matriz[1]));
?>