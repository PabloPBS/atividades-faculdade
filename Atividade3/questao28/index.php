<?php 
    echo '<p>Crie uma classe em PHP chamada "Vetor" que tenha um método para retornar um novo vetor com os elementos que são pares</p>';

    class Vetor {
        function ValoresPares (array $vetor) : array
        {
            foreach ($vetor as $num) {
                if ($num % 2 == 0) {
                    $vetorPar[] = $num;
                }
            }
            return $vetorPar;
        }
    }

    $vetor = [1,2,3,4,5,6,7,8,9,10];
    $objetoVetor = new Vetor();
    $vetorPar = $objetoVetor->ValoresPares($vetor);

    echo 'Vetor: <hr>';
    print_r($vetor);
    echo '<br>Valores pares: <hr>';
    print_r($vetorPar);
?>