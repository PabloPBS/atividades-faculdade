<?php 
    echo '<p>Crie uma classe em PHP chamada "Matriz" que tenha um método para retornar a diagonal principal da matriz</p>';

    class Matriz {
        function DiagonalPrincipal (array $matriz) : array 
        {
            for ($c = 0; $c < count($matriz); $c++) {
                for ($i = 0; $i < count($matriz[0]); $i++) {
                    if ($c == $i) {
                        $diagonal[] = $matriz[$c][$i];
                    }
                }
            }
            return $diagonal;
        }
    }

    $matriz = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    $objetoMatriz = new Matriz();
    $diagonalPrincipal = $objetoMatriz->DiagonalPrincipal($matriz);

    echo 'Matriz: <hr>';
    print_r($matriz);
    echo '<hr>Diagonal Principal: <hr>';
    print_r($diagonalPrincipal);
?>