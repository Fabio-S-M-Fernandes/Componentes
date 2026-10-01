<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";

    if ($rota === "clientes") {
        clienteController();
    } elseif ($rota === "lojaracao") {
        lojaracaoController();
    } else {
        echo "404 - Rota não encontrada!<br>";
    }
}