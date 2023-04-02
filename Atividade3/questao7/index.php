<?php
echo '<p>Escreva uma função em PHP que receba uma matriz e retorne a transposta dela</p>';

function transpostaDeMatriz (array $vetor1, array $vetor2)
{
for($c = 0; $c < count($vetor1); $c++) {
    echo $vetor1[$c] . ' ';
    echo $vetor2[$c] . '<br>';
}
echo '<hr>';
for ($c = 0; $c < count($vetor1); $c++) {
    echo $vetor1[$c] . ' ';
    if ($c == (count($vetor1)-1)) {
        echo '<br>';
        for ($i = 0; $i < count($vetor1); $i++) {
            echo $vetor2[$i] . ' ';
        }
    }
}
}
   
$matriz = [
    [1,2,3,4],
    [5,6,7,8],
];

transpostaDeMatriz($matriz[0], $matriz[1]);

//print_r($matriz);
?>