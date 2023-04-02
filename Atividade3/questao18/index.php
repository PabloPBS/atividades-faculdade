<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e um número inteiro e retorne um novo vetor com os elementos que são menores do que o número informado</p>';

    $vetor = [1,3,5,6,7,2,6,8,10,3];
    $condicao = 5;

    function menorValor (array $vetor, int $condicao) : array
    {
        foreach ($vetor as $num) {
            if ($condicao > $num) {
                $vetorMenor[] = $num;
            }
        }
        return $vetorMenor;
    }

    echo 'Valores do vetor: <hr>';
    print_r($vetor);
    echo "<hr>Valores menores que $condicao: <hr>";
    print_r(menorValor($vetor, $condicao))
?>