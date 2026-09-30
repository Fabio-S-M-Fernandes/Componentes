<?php

function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/clientes";
    $parametro = "id=4463";
    middleware($rota);
}