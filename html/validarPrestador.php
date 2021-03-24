<?php

session_start();

// require_once '../global.php';
require_once '../classes/Prestador.php';


    try{

        $email = $_POST['email'];

        $senha = $_POST['senha'];

        $validar = new validacao();

        $validar->setemailPrestador($_POST['email']);

        $validar->setsenhaPrestador($_POST['senha']);

        $sql = $validar->verPrestador($validar);

       while ($row = $sql->fetch(PDO::FETCH_BOTH)) {

            if ($row[3]=$email) {
                if ($row[6]=$senha) {

                    header("Location: home.php");
                    $_SESSION['cod'] = $row[0];
                }
            }
        }
        
        
        }catch(PDOException $e){
        echo '<prev>';
            print_r($e);
        echo '<prev>';
        echo "ERRO: ". $e -> getMessage();
    }
?>

<script type="text/javascript">
        setInterval(function(){ 
        alert("Login ou senha incorretos");
        window.location.href = "loginTrabalhador.php";
    }, 4800);
</script>