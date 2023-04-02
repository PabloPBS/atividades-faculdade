<?php 
    echo '<p>Crie uma classe em PHP chamada "Matriz" que tenha um método para calcular 
    a soma dos valores presentes em uma matriz.</p>';

    class Matriz {
        public function SomarMatriz (array $matriz) : int
        {
            $soma = 0;
            for ($c = 0; $c < count($matriz); $c++) {
                for ($i = 0; $i < count($matriz[0]); $i++) {
                    $soma += $matriz[$c][$i];
                }
            }
            return $soma;
        }
    }

    $matriz = [
        [1,2,3,4,5],
        [6,7,8,9,10]
    ];
    $objetoMatriz = new Matriz();
    $soma = $objetoMatriz->SomarMatriz($matriz);
    print_r($matriz);
    echo "<hr>Soma: $soma";

?>