<?php

$nome = readline("Informe a multiplicação: ");
$partes = explode("*", $nome);

if (count($partes) == 2) {
    $nome1 = $partes[0];
    $nome2 = $partes[1];
    
    $soma = 0;

    for ($i = 0; $i < $nome1; $i++) { 
        echo "$nome2";
        if($i != $nome1 - 1) {
            echo " + ";
        }
        $soma += $nome2;
    }

    echo "= $soma\n";
} else {
    echo "Formato inválido.";
}
