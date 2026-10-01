<?php

function router(){
    echo "2. Router está analisando a URL.<br>";
    // Pega a rota enviada na URL (?rota=...) ou define 'clientes' como padrão
    $rota = $_GET['rota'] ?? 'clientes';
    middleware($rota);
}