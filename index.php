<?php

    require_once "cliente.php";
    require_once "conta.php";

    
    $conta1 = new ContaBancaria(1, $_POST['deposito'], date("d/m/Y"), $_POST['senha']);
    $cliente1 = new Cliente($_POST['nome'], $_POST['cpf'], $_POST['email'], $conta1);

    $conta1->addSaldo(198);
    $conta1->remSaldo(250.60);

    echo $cliente1 . "</br>"; 

    $valorSaque = 1000;
    if($conta1->getSenha() == 222111){
        if($conta1->getSaldo() < $valorSaque){
            echo "saldo insuficiente";
        } else {
            $conta1->remSaldo($valorSaque);
            echo "Saque completo, Saldo atual: " . $conta1->getSaldo();
        }
    } else {
        echo "Senha incorreta";
    }
?>
