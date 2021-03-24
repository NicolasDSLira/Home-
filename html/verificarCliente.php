<?php

// require_once '../global.php';
require_once '../classes/Cliente.php';

    try{
        // header("Location: home.php");
        $verC = new validarCliente();
        $verC->setemailCli($_POST['email']);
        $verC->setsenhaCli($_POST['senha']);
        print_r($verC->verCli($verC));
        $_SESSION['id'] = $_POST['email'];
        echo "<br><br>OK >> ";

    }

    catch(Exception $e){
        echo '<prev>';
            print_r($e);
        echo '<prev>';
        echo $e->getMessage();
    }
?>