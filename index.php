<?php

    require_once "cliente.php";
    require_once "conta.php";


    $conta1 = new ContaBancaria(1, 2000);
    $cliente1 = new Cliente("joao", 123456, "joao@gmail.com", $conta1);

    $conta1->addSaldo(198);
    $conta1->remSaldo(250.60);

    
    echo $cliente1;
?>