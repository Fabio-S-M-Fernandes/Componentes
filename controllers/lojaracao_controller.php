<?php

function lojaracaoController(){
    echo "6. Controller da Loja de Ração recebeu a requisição.<br>";
    $produtos = lojaracaoService();
    echo "8. Controller recebeu os dados do Service.<br><br>";
    echo "Produtos encontrados:<br>";

    foreach ($produtos as $p) {
        echo "- " . $p . "<br>";
    }
}