<?php
$idade = 23;
$numeroPessoas = 2;
echo "Você só poderá entrar se tiver 18 anos ou mais, a partir de 16 anos, apenas acompanhado \n";

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!\n";
} elseif ($idade >= 16 && $numeroPessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar!\n";
} else {
    echo "Você só tem $idade anos. Infelizmente você não poderá entrar sem um adulto para acompanhá-lo\n";
}