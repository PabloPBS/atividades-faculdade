<?php 
    echo '<p> Escreva uma função em PHP que receba uma matriz e retorne um novo vetor com os elementos da diagonal principal.</p>';

    $matriz = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    echo 'Matriz: <hr>';

    for ($c = 0; $c < count($matriz); $c++) {
        for ($i = 0; $i < count($matriz[0]); $i++) {
            echo$matriz[$c][$i] . ' ';
        }
        echo '<br>';
    }

    echo '<hr>Diagonal principal:<hr>';

    function diagonalPrincipal (array $matriz) : array
    {
    for ($c = 0; $c < count($matriz); $c++) {
        for ($i = 0; $i < count($matriz[0]); $i++) {
            if ($c == $i) {
                $vetor[] =  $matriz[$c][$i];
            }
        }
    }
    return $vetor;
    }

    print_r(diagonalPrincipal($matriz))



    /*function diagonalPrincipal ($matriz)
    {
    for ($c = 0; $c < count($matriz); $c++) {
        for ($i = 0; $i < count($matriz[0]); $i++) {
            if ($c == $i) {
                echo $matriz[$c][$i] . ' ';
            } else {
                echo ' x ';
            }
        }
        echo '<br>';
    }
    }

    diagonalPrincipal($matriz)*/
?>