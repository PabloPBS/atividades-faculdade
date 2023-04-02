<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e um número inteiro e retorne um novo vetor com os elementos multiplicados pelo número informado.</p>';

    $vetor = [1,2,3,4,5,6,7,8,9,10];
    $multiplicador = 2;
    
    function multiplicadorDeArrays (array $vetor, int $multiplicador) : array 
    {
        for ($c = 0;$c < count($vetor); $c++) {
            $vetor[$c] *= $multiplicador;
        }
        $vetorMultiplicado = $vetor;
        return $vetorMultiplicado;
    }
    echo 'Multiplicador = 2 -> ';
    echo 'Vetor antes:<br>';
    print_r($vetor);
    echo ' <hr>Vetor depois:<br>';
    print_r(multiplicadorDeArrays($vetor, $multiplicador));
?>