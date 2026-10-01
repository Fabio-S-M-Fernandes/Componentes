<?php

function clienteController(){
    echo "6. Controller recebeu a requisição.<br>";
    $cliente = clienteService();
    echo "8. Controller recebeu os dados do Service.<br><br>";
    echo "Clientes encontrados:<br>";

    foreach ($cliente as $cliente) {
        echo "- " . $cliente . "<br>";
    }
}
