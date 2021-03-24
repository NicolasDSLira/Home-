<?php

// require_once '../global.php';
require_once '../classes/Prestador.php';

    /*Retirando mascara do cpf*/    

    $cpf = $_SESSION["cpf"];
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


    try{
        $prestador = new Prestador();
        $prestador->setnomePrestador($_SESSION['nome']);
        $prestador->setcpfPrestador($cpf);
        $prestador->setemailPrestador($_SESSION['email']);
        $prestador->setdataNascPrestador($_SESSION['datanasc']);
        $prestador->setcidadePrestador($_SESSION['cidade']);
        $prestador->setsenhaPrestador($_SESSION['senha']);
        $prestador->setnumfonePrestador($_SESSION['telefone']);
        $cod = $prestador->cadastrarPrestador($prestador);

        $_SESSION['cod'] = $cod;
        
         // serviço

        require_once '../classes/Servico.php';

        $servico = new servicoPrestado();
        $servico->setcodPrestador($_SESSION['codPrestador']); 
        $servico->setcodServico($_POST['servico']);
        $servico->setvalorMinimo($_POST['valorM']);

        print_r($servico->cadastrarServico($servico));

        header("Location: ./home.php");

    }
        
    catch(PDOException $e){
        echo '<prev>';
            print_r($e);
        echo '<prev>';
        echo "ERRO: ". $e -> getMessage();
    }