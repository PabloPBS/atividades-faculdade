<?php 
    echo '<p>Crie uma classe em PHP chamada "Vetor" que tenha um método para retornar o maior valor presente no vetor</p>';

    class Vetor {
        function MaiorValor (array $vetor) : int
        {
            return max ($vetor);
        }
    }

    $vetor = [4,3,5,19,2,1,4,5,5,8,10,18];
    $objetoVetor = new Vetor();
    $maiorValor = $objetoVetor->MaiorValor($vetor);

    echo 'Vetor: <hr>';
    print_r($vetor);
    echo "<hr> Maior Valor: $maiorValor";
?>