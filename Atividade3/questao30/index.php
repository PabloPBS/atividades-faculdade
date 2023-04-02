<?php 
    echo '<p>Crie uma classe em PHP chamada "Vetor" que tenha um método para retornar um novo vetor com os elementos em ordem inversa</p>';

    class Vetor {
        function InverterVetor (array $vetor) : array
        {
            return array_reverse($vetor);
        }
    }

    $vetor = [1,2,3,4,5,6,7,8,9,10];
    $objetoVetor = new Vetor;
    $vetorInverso = $objetoVetor->InverterVetor($vetor);

    echo 'Vetor: <hr>';
    print_r($vetor);
    echo '<hr>Vetor invertido:<hr>';
    print_r($vetorInverso);
?>