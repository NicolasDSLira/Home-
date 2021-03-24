<?php



require_once '../classes/Prestador.php';

$cod = $_SESSION['cod'];


    try{
        $verPrestador = new visualizar();
        $verPrestador->setcodPrestador($_SESSION['cod']);
        $vr = $verPrestador->verPrestador($verPrestador);

        while ($row = $vr->fetch(PDO::FETCH_BOTH)) {
          $name = $row[1];
          $cpf = $row[2];
          $email = $row[3];
          $dn = $row[4];
          $city = $row[5];
          $senha = $row[6];
        }

        $vt = $verPrestador->verTelefone($verPrestador);

        while ($row = $vt->fetch(PDO::FETCH_BOTH)) {
         $nFone  = $row[0];
        }


    }

    catch(Exception $e){
        echo '<prev>';
            print_r($e);
        echo '<prev>';
        echo $e->getMessage();
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$name";?></title>
	<link rel="shortcut icon" href="..\imagens\favicon.ico">
	<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
</head>
<body>
<!-- TOP -->

<!--navbar-->

<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #01DDFF" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> 
      <img src="../imagens/Home+2.png" width="60" height="50" alt=""> 
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            1
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                Home
              </a>
            </li>
            2
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#sobre">
                serviços
              </a>
            </li>
            3
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#sobre">
                Chat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="conf.prestador.php">
                Perfil
              </a>
            </li>
          </ul>
        </div>
  </div>
</nav>
 End navbar -->



<!-- Texto com nome -->
<div class="container-fluid" style="margin-top: 1%; margin-bottom: 5%;">
  <h1 class="display-6 lead text-center">Bem vindo(a) <?php echo "$name";?></h1>
</div>

<!-- MID -->

<div class="row" style="margin-left: 1%;">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

      <div class="container-md">
        
        <?php  

        try {
        
         $eName = "<p>Nome: $name</p>";
         $eCpf = "<p>CPF: $cpf</p>";
         $eEmail =  "<p>Email: $email</P>";
         $date = "<p>Data de Nascimento:  $dn </P>";
         $eCity = "<p>Cidade: $city</P>";
         $eSenha = "<p>Senha: $senha</P>";
         $enFone =  "<p>Telefone: $nFone</P>";
        
        $stmt = null;   
        
        
        echo "$eName $eCpf $eEmail $date $eCity $eSenha $enFone";
          
        }catch (PDOException $e) {
         echo "ERRO: ". $e -> getMessage();
        }
        
        ?>

      </div>

      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

      <div class="container-md">


     

     <form method="POST">


     <input  type='submit' class='btn btn-danger' name='excluir' id='excluir' value='Excluir'>

     </form>

     <?php

     if (isset($_POST['excluir'])) {
       header("location:../bd/delet/prestador.php");
     }
     ?>

    </div>
  </div>
    </div>
  </div>
</div>



<!-- BOT -->

<script type="text/javascript" src="../js/bootstrap.js"></script>
  

</body>
</html>