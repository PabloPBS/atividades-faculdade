<?php 
    echo '<p>Crie uma classe em PHP chamada "Matriz" que tenha um método para retornar a transposta da matriz</p>';

    class Matriz {
        function TranspostaMatriz (array $vetor1, array $vetor2) 
            {
                for($c = 0; $c < count($vetor1); $c++) {
                    echo $vetor1[$c] . ' | ';
                    echo $vetor2[$c] . '<br>';
                }
            }
    }

    $matriz = [
        [1,2,3,4,5],
        [6,7,8,9,10]
    ];

    for ($c = 0; $c < count($matriz); $c++){
        for ($i = 0; $i < count($matriz[0]); $i++){
            echo $matriz[$c][$i] . '  ';
        }
        echo '<br>';
    }

    echo '<hr>';

    $objetoMatriz = new Matriz;
    $objetoMatriz->TranspostaMatriz($matriz[0], $matriz[1]); 
?>