<?php

// require_once '../global.php';
require_once '../classes/Cliente.php';

    try{
        // header("Location: index.php");
        $cliente = new Cliente();
        $cliente->setnomeCliente($_POST['nome']);
        $cliente->setcpfCliente($_POST['cpf']);
        $cliente->setdataNascCliente($_POST['datanasc']);
        $cliente->setEmailCliente($_POST['email']);
        $cliente->setSenhaCliente($_POST['senha']);
        $cliente->setlogradouroCliente($_POST['logradouro']);
        $cliente->setNumeroCasaCliente($_POST['numero']);
        $cliente->setBairroCliente($_POST['bairro']);
        echo $cliente->cadastrarCliente($cliente);
    }

    catch(Exception $e){
        echo '<prev>';
            print_r($e);
        echo '<prev>';
        echo $e->getMessage();
    }