<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e retorne o maior valor presente nele.</p>';

    $vetor = [1,2,3,45,6,7,8,90,10];
    function maiorValorVetor (array $vetor) : int
    {
        return max($vetor);
    }
    echo 'Vetor: <hr>';
    print_r($vetor);
    echo '<hr>Maior valor: '.maiorValorVetor($vetor);
?>