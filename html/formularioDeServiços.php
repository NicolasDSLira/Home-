<?php
session_start();
$nome = $_POST['nome'];
$CPF = $_POST['cpf'];
$nasc = $_POST['datanasc'];
$cidade = $_POST['cidade'];
$email = $_POST['email']; 
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$_SESSION['nome'] = $nome;
$_SESSION['cpf'] = $CPF;
$_SESSION['datanasc'] = $nasc;
$_SESSION['cidade'] = $cidade;
$_SESSION['email'] =  $email;
$_SESSION['telefone'] = $telefone ;
$_SESSION['senha'] = $senha;

$partes = explode(' ', $nome);
$primeiroNome = array_shift($partes);
$ultimoNome = array_pop($partes);


?>
<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" >
        <title> Home+ </title>

        <style>
 input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    </style>

    </head>
    <body>

        <center> <h3>Cadastrar Serviço</h3> </center>

        <div class="container">


      <form class="was-validated" action="./cadastrarPrestador.php" method="POST" novalidate> 

    <div class="container">

    <div class="row g-3">

        <div class="col-md-4">
          <label for="validationServer01" class="form-label">Nome</label>
          <input type="text" class="form-control is-valid" id="validationServer01" value="<?php echo($primeiroNome);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Sobrenome</label>
          <input type="text" class="form-control is-valid" id="validationServer02" value="<?php echo($ultimoNome);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Email</label>
          <input type="text" class="form-control is-valid" id="email" name="email"  value="<?php echo($email);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">CPF</label>
          <input type="text" class="form-control is-valid" id="validationServer02" name="cpf" value="<?php echo($CPF);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control is-valid" id="validationServer02" name="datanasc" value="<?php echo($nasc);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Cidade</label>
          <input type="text" class="form-control is-valid" id="validationServer02" name="cidade" value="<?php echo($cidade);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Telefone</label>
          <input type="text" class="form-control is-valid" id="validationServer02" name="telefone"  value="<?php echo($telefone);?>" required disabled>
        </div>

        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Senha</label>
          <input type="password" class="form-control is-valid" id="validationServer02" name="senha" value="<?php echo($senha);?>" required disabled>
        </div>

                       



            <div class="col-md-4">
              <label for="validationServerUsername" class="form-label">Username(Nome de Usuário)</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="nome" value="<?php echo($nome);?>" required>
              </div>
            </div>

        
           

            <div class="mb-3">
              <label for="dinheiro"  class="form-label">Valor Minimo do Serviço</label>
              <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend3">R$</span>
              <input type="number" class="form-control is-invalid" id="dinheiro" name="valorM" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" step="0.01" min="10.00"   required>
              
              </div>
            </div>
            </div> 

        
            <br>

            <div class="mb-3">
              <select id="inputState" class="form-select" required aria-label="select example" name="servico">

                <option selected disabled value="" hidden>Selecione um serviço</option>

    <?php

      include_once '../classes/Servico.php';
      $selecionar = new selecionar();
      $sql = $selecionar->exibir($selecionar);
      
    while ($row = $sql->fetch(PDO::FETCH_BOTH)) {
      echo "<option value='$row[0]'>$row[1]</option>";
    }
      
      ?>
      
              </select>
              
              <div class="invalid-feedback">Example invalid select feedback</div>
            
            </div>
              

            
          <div class="container">
            <div class="col-12">     
            <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
              <label class="form-check-label" for="validationFormCheck1">Concordo e Aceito os Termos e Condições. </label>
              <div class="invalid-feedback"> Você deve aceitar os <a href="Termos de uso Home+.html" alt="Termos de uso" title="Termos de uso.">termos e condições.</a> antes de processeguir. </div>
            </div>
           

            <div class="col-12">
              <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
          </div>
          </div>
        </form>

        <div class="position-relative m-4">

<div class="progress" style="height: 1px;">

  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

</div>
<button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
<button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
<button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
</div>

        <script src="../js/bootstrap.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>

        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>

        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
         


    </body>