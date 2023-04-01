<?php 
    echo '<p>Escreva uma função em PHP que receba uma matriz e retorne a transposta dela</p>';

    function transpostaDeMatriz (array $vetor1, array $vetor2)
    {
    for($c = 0; $c < 4; $c++) {
        echo $vetor1[$c] . ' ';
        echo $vetor2[$c] . '<br>';
    }
    echo '<hr>';
    for ($c = 0; $c < 4; $c++) {
        echo $vetor1[$c] . ' ';
        if ($c == 3) {
            echo '<br>';
            for ($i = 0; $i < 4; $i++) {
                echo $vetor2[$i] . ' ';
            }
        }
    }
    }
       
    $matriz = [
        $array = [1,2,3,4],
        $array1 = [5,6,7,8],
    ];

    echo transpostaDeMatriz($array, $array1);

    //print_r($matriz);
?>