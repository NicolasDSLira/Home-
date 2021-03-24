<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">

        <title> Admin </title>
        <link rel="shortcut icon" href="..\imagens\favicon.ico">

        <link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        
    </head>
    <body style="margin-left: 10%; margin-right: 10%;">


<nav>

  <div class="nav nav-tabs" id="nav-tab" role="tablist">

    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>

    <button class="nav-link" id="nav-prestador-tab" data-bs-toggle="tab" data-bs-target="#nav-prestador" type="button" role="tab" aria-controls="nav-prestador" aria-selected="false">Prestadores</button>

    <button class="nav-link" id="nav-add-tab" data-bs-toggle="tab" data-bs-target="#nav-add" type="button" role="tab" aria-controls="nav-add" aria-selected="false">Adicionar Serviço</button>

  </div>

</nav>

<div class="tab-content" id="nav-tabContent">

<!-- HOME -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <br> 
            <h1 class="display-4 text-center">
              ADMIN PRESTADORES
            </h1>
              <br>
            <p class="lead text-center">
              Pagina direcionada para monitoranento de dados de prestadors e requisição de dados
            </p>
  </div>
  <!-- FIM HOME -->

  <!-- Adicionar Serviço -->

  <div class="tab-pane fade" id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
    
    <br>
  
    <h1 class="h3 mb-3 fw-normal">Cadastrar serviço</h1>
  
  <form action="../html/addServico.php" method="POST">
  
    <input type="text" name="codP" value="servico" hidden> 
  
      <div class="mb-3">
  
        <label for="name" class="form-label">Nome serviço</label>
  
        <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Eletricista">
  
      </div>
  
      <div class="mb-3">
  
        <label for="desc" class="form-label">Descrição</label>
  
        <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
  
      </div>
  
      <div class="mb-4">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div> 
  
  </form>
  
    </div>

    <!-- Fim add servico -->

  <!-- VP -->

  <div class="tab-pane fade" id="nav-prestador" role="tabpanel" aria-labelledby="nav-prestador-tab">
  <h1 class="display-4" style="text-align: center; margin-top: 1%; margin-bottom:           1%;">
              Dados Prestadores
            </h1>

          <?php

          include("../classes/Prestador.php");

          try {
          
              $prestador = new visuPrestadores();
          
              $stmt = $prestador->visualziarPrestador($prestador);

              while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                echo  "$row[1]<br>";
              }
          
              while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
            
                $USERID = $row[0];
            
                $_SESSION["cod $USERID"] = $USERID; 

                  echo "
        <div class='accordion-item'>
          <h2 class='accordion-header' id='headingOne'>
            <button class='accordion-button' type='button' data-bs-toggle='collapse'          data-bs-target='#collapse$row[0]' aria-expanded='true'          aria-controls='collapseOne'>
              USER ID #$row[0]
            </button>
          </h2>
        <div id='collapse$row[0]' class='accordion-collapse collapse show'          aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
          <div class='accordion-body'>
              <strong>Nome:</strong> $row[1]<br>
              <strong>CPF:</strong> $row[2]<br>
              <strong>email:</strong> $row[3]<br>
              <strong>Data de Nascimento :</strong> $row[4]<br>
              <strong>Cidade:</strong> $row[5]<br>
              <strong>Senha:</strong> $row[6]<br>";

              $stmt = null;

              $telefone = new visualizarT();

              $telefone->setcodP($USERID);
              
              $stmt = $telefone->verT($telefone);

            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
              $_SESSION["codF"] = $row[0];
              echo "
              <strong>Id Telefone:</strong> $row[0]<br>
              <strong>Telefone:</strong> $row[1]<br>
              <br>
            
                <div class='container'>
                  <div class='row'>
                    <div class='col-sm'>
                      <form action='gerarPDF.php' method='POST'>
                        <input type='number' name='id' id='id' value='$USERID' hidden>
                        <button type='submit' class='btn btn-secondary'>Gerar PDF</button>
                      </form>
                    </div>
                    <div class='col-sm'>
                      <form action='../bd/delet/prestador.php' method='POST'>
                        <input type='number' name='id' id='id' value='$USERID' hidden>
                        <button type='submit' class='btn btn-danger'>Excluir</button>
                      </form>
                    </div>
                    <div class='col-sm'>
                      <form action='../html/update/prestador.php' method='POST'>
                        <input type='number' name='id' id='id' value='$USERID' hidden>
                        <button type='submit' class='btn btn-warning'>Modificar</button>
                      </form>
                    </div>
                  </div>
              </div>
          </div>";

          $_SESSION['codP'] = null;

            }
          }

          }catch (PDOException $e) {
            echo "ERRO: ". $e -> getMessage();
          }

            ?>
        </div>
        </div>

<!-- FIM VP -->


</div>




</body>
</html> 