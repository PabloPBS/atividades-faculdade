<?php 
    echo '<p>Escreva uma função em PHP que receba um vetor e retorne a soma de todos os seus elementos.
    </p>';
    function somaVetor(array $vetor) : int
    {
        return array_sum($vetor);
    }
    $vetor = array(2,4,63,5,6,75,48,8,5,24,-45,-1,24,-3,-56);
    print_r($vetor);
    echo '<hr>';
    echo 'Soma dos valores do array: ';
    echo somaVetor($vetor);
?>