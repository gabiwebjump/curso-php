<?php
$peso = 50;
$altura = 1.58;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "Você está abaixo do peso!";
} elseif ($imc < 25) {
    echo "Parabéns, seu peso é ideal, continue se cuidando!";
} else {
    echo "Você está acima do peso, procure um médico!";
}