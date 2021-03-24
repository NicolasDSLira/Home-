<?php

require_once '../classes/Servico.php';

    try{

        $addS = new add();
        $addS->setnomeAdd($_POST['name']);
        $addS->setdescAdd($_POST['desc']);
        $cod = $addS->addServico($addS);
        print_r($cod);

        header("Location: ./../admin/");

    }
        
    catch(PDOException $e){
        echo '<prev>';
            print_r($e);
        echo '<prev>';
        echo "ERRO: ". $e -> getMessage();
    }