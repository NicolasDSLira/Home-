<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Trabalhador </title>
        <link rel="shortcut icon" href="..\imagens\favicon.ico">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="..\css\styleCadastroTrabalhador.css">

    </head>
    <body>



    <center>
        <img src="../imagens/Home+2.png" width="100" height="100" id="img1"> <br>

        <font id="font1"> Faça seu cadastro agora!</font> <br>
    

        <font id="font2"> Insira seus dados: </font> <br>
        
        <form id="form1" method="post" action="formularioDeServiços.php">
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
                    <input type="city" id="city" name="cidade" class="form-control" placeholder="cidade:" aria-label="cidade:" required>
                    <label for="floatingInput"> Digite sua cidade: </label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="email:" aria-label="email" required>
                    <label for="floatingInput"> Digite seu email: </label>
                </div>

                <div class="form-floating mb-3">
                    <input attrname="telephone1" name="telefone" id="telefone" type="text" class="form-control" required>
                    <label for="floatingInput"> Digite seu telefone: </label>
                </div>

                <div class="form-floating">
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="senha:" aria-label="senha" required>
                    <label for="floatingInput"> Senha: </label>
                </div>
                <button type="submit" id="button1"> Cadastrar </button>
            </form>
    </center>

    <div class="position-relative m-4">

<div class="progress" style="height: 1px;">

  <div class="progress-bar" role="progressbar" style="width: 2%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

</div>
<button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
<button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">2</button>
<button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
</div>

    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>

        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>

        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>

        <script>
            function inputHandler(masks, max, event) {
	        var c = event.target;
	        var v = c.value.replace(/\D/g, '');
	        var m = c.value.length > max ? 1 : 0;
	        VMasker(c).unMask();
	        VMasker(c).maskPattern(masks[m]);
	        c.value = VMasker.toPattern(v, masks[m]);
            }

            var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
            var tel = document.querySelector('input[attrname=telephone1]');
            VMasker(tel).maskPattern(telMask[0]);
            tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

            var docMask = ['999.999.999-999', '99.999.999/9999-99'];
            var doc = document.querySelector('#doc');
            VMasker(doc).maskPattern(docMask[0]);
            doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);
        </script>


    </body>
</html>