<?php 
    echo '<p>Crie uma classe em PHP chamada "Matriz" que tenha um método para calcular a média dos valores presentes em uma matriz</p>';

    class Matriz {
        function MediaValores (array $matriz) : float
        {
            $soma = 0;
            $media = 0;
            for ($c = 0; $c < count($matriz); $c++) {
                for ($i = 0; $i < count($matriz[0]); $i++) {
                    $soma += $matriz[$c][$i];
                }
            }
            $media = $soma/(count($matriz) * count($matriz[0]));
            return $media;
        }
    }

    $matriz = [
        [1,2,3,4,5,6,7,8,9,10],
        [11,12,13,14,15,16,17,18,19,20]
    ];

    $objetoMatriz = new Matriz();
    $media = $objetoMatriz->MediaValores($matriz);
    echo 'Matriz: <hr>';
    print_r($matriz);
    echo '<hr>Média dos valores: '.$media;
?>