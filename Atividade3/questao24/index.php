<?php 
    echo '<p>Crie uma classe em PHP chamada "Vetor" que tenha um método para retornar um novo vetor com os elementos multiplicados por um número informado</p>';

    class Vetor {
        function MultiplicarVetor (array $vetor, int $multiplicador) : array 
        {
            foreach ($vetor as $num) {
                $num *= $multiplicador;
                $vetorMultiplicado[] = $num;
            }
            return $vetorMultiplicado;
        }
    }

    $vetor = [1,2,3,4,5,6,7,8,9,10];
    $multiplicador = 2;
    $objetoVetor = new Vetor();
    $vetorMultiplicado = $objetoVetor->MultiplicarVetor($vetor, $multiplicador);

    echo 'Vetor: <hr>';
    print_r($vetor);
    echo "<hr>Vetor Multiplicado: (Multiplicador = $multiplicador)<hr>";
    print_r($vetorMultiplicado);
?>