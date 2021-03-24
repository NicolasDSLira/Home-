<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Cliente </title>
        <link rel="shortcut icon" href="..\imagens\favicon.ico">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="..\css\styleFormularioCliente3.css">

    </head>
    <body>

        <center>
        <img src="../imagens/Home+2.png" width="100" height="100" id="img1"> <br>

        <font id="font1"> Faça seu cadastro agora!</font> <br>
        
        <!-- <font id="font2"> Insira seus dados: </font> <br> -->

        <form id="form1" name="formDados" method="post" action="cadastrarCliente.php">

        <font id="font2"> Insira seus dados: </font> <br>

            <div class="form-floating mb-3">
                <input type="text" id="name" name="nome" class="form-control" placeholder="Nome" aria-label="nome" required autofocus>
                <label for="floatingInput"> Nome: </label>
            </div>

            <div class="form-floating mb-3">
                    <input type="text" name="cpf" id="cpf" class="cpf-mask form-control" placeholder="Ex.: 000.000.000-00" required>
                    <label for="floatingInput"> CPF: </label>
                </div>

            <div class="form-floating mb-3">
                <input type="date" id="datanasc" name="datanasc" class="form-control" placeholder="datanasc" aria-label="datanasc" required>
                <label for="floatingInput"> Data de Nascimento: </label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="email:" aria-label="email" required>
                <label for="floatingInput"> Digite seu email: </label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="senha:" aria-label="senha" required>
                <label for="floatingInput"> Senha: </label>
            </div>
        <!-- </form> <br> -->

        <!-- <font id="font3"> Insira seu Endereço: </font> <br>

        <form id="form2" name="formEndereco" method="post" action="cadastrarCliente.php"> -->
            <div class="form-floating mb-3">
                <input type="text" id="logradouro" name="logradouro" class="form-control" placeholder="Logradouro" aria-label="logradouro" required>
                <label for="floatingInput"> Logradouro: </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" id="numero" name="numero" class="form-control" placeholder="numero" aria-label="numero" required>
                <label for="floatingInput"> Número: </label>
            </div>

            <div class="form-floating">
                <input type="text" id="bairro" name="bairro" class="form-control" placeholder="bairro" aria-label="bairro" required>
                <label for="floatingInput"> Bairro: </label>
            </div>

            <button type="submit" id="button1"> Cadastrar </button>

        </form>

        <!-- <button type="submit" id="button1" on> Cadastrar </button> -->

    </center>

    <div class="position-relative m-4">
  <div class="progress" style="height: 1px;">
    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
  <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
  <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <!-- class="relative" 
    clas="relative-parent" -->

    </body>
</html>