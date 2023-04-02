<?php 
    ECHO '<p>Crie uma classe em PHP chamada "Vetor" que tenha um método para ordenar os elementos em ordem crescente</p>';

    class Vetor {
        function ordenarVetor (array $vetor) : array 
        {
            sort($vetor);
            return $vetor;
        }
    }
    $vetor = [7,6,8,5,4,1,2,10,3,9];
    $objetoVetor = new Vetor();
    $vetorOrdenado = $objetoVetor->ordenarVetor($vetor);
    echo 'Vetor: <hr>';
    print_r($vetor);
    echo '<hr>Vetor ordenado: <hr>';
    print_r($vetorOrdenado);
?>