<?php 
    echo '<p>Escreva uma função em PHP que receba uma matriz e um número inteiro e retorne uma nova matriz com os elementos que são menores do que o número informado</p>';

    $matriz = [
        [1,4,5,3,4,3,8,5,4,3,7,11],
        [7,5,8,4,3,2,5,6,7,2,1,10]
    ];
    $condicao = 5;

    function menorValorMatriz (array $matriz, int $condicao) : array
    {
        for ($c = 0; $c < count($matriz); $c++){
            for ($i = 0; $i < (count($matriz[0])); $i++) {
                if ($matriz[$c][$i] < $condicao) {
                    $vetor[] = $matriz[$c][$i];
                }
            }
        }
        return $vetor;
    }

    echo 'Matriz: <hr>';
    print_r($matriz);
    echo "<hr>Valores menores que $condicao: <hr>";
    print_r(menorValorMatriz($matriz, $condicao));

?>