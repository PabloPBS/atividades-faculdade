<?php 
    echo '<p>Crie uma classe em PHP chamada "Matriz" que tenha um método para retornar o menor valor presente na matriz.</p>';

    class Matriz {
        function MenorValor (array $matriz) : int
        {
            return min(array_merge($matriz[0], $matriz[1]));
        }
    }

    $matriz = [
        [1,2,3,-6,4,5],
        [-5,-4,-3,-10,-2,-1]
    ];

    $objetoMatriz = new Matriz();
    $menorValor = $objetoMatriz->MenorValor($matriz);
    
    echo 'Matriz: <hr>';
    print_r($matriz);
    echo "<hr>Menor valor: $menorValor";
?>