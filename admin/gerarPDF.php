<?php

require_once './dompdf/lib/html5lib/Parser.php';
require_once './dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once './dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once './dompdf/src/Autoloader.php';    

Dompdf\Autoloader::register();
use Dompdf\Dompdf;

// inicializando o objeto Dompdf
$dompdf = new Dompdf();

 include("../classes/Conexao.php");

 $id = $_POST['id'];

    try {

      $conexao = Conexao::pegarConexao();


      $stmt=$conexao->prepare("SELECT * FROM `tbprestador` WHERE `codPrestador`= $id");

      $stmt->execute();

      while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

        $USERID = $row[0];
        $Nome=$row[1];
       	$CPF=$row[2];
        $email=$row[3];
        $Data=$row[4];
        $Cidade=$row[5];
        $Senha=$row[6];

        $tel=$conexao->prepare("SELECT * FROM `tbFonePrestador`  WHERE `codPrestador` = $row[0]");

        $tel->execute();

      while ($row = $tel->fetch(PDO::FETCH_BOTH)) {
       $IdTelefone=$row[0];
       $Telefone=$row[1];
     
      }



      }
  } catch (PDOException $e) {
      echo "ERRO: ". $e -> getMessage();
    }

//coloque nessa variável o código HTML que você quer que seja inserido no PDF
$codigo_html = "
<!DOCTYPE html>
<html lang='pt-br'>

    <head>
    <title>Dados $USERID</title>
        <meta charset='UTF-8'>

       <style>
th{
    text-align: left;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
}
td {
    text-align: left;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
}

table{
	border: 1px solid black;
    border-collapse: collapse;
	margin-left: auto;
  	margin-right: auto;
   	width: 100%;
}
tr.title{
	background-color: #CFE2FF;
	text-align: center;
}
       
       </style>
        
 

    </head>
    <body>
<h1 style='text-align: center;'>Dados Prestador</h1>

<table>
<tr class='title'>
  <th>atributo</th>
   <th>Dados</th>
</tr>
<tr>
  <th>ID Prestador:</th>
   <td>$USERID</td>
</tr>
<tr>
	<th>Nome:</th>
  	<td>$Nome</td> 
</tr>
<tr>
	<th>CPF:</th>
  	<td>$CPF</td> 
</tr>
<tr>
	<th>E-mail:</th>
  	<td>$email</td> 
</tr>
<tr>
	<th>Data de Nascimento</th>
  	<td>$Data</td> 
</tr>
<tr>
	<th>Cidade:</th>
  	<td>$Cidade</td> 
</tr>
<tr>
	<th>Senha:</th>
  	<td>$Senha</td> 
</tr>
<tr>
	<th>ID Telefone:</th>
  	<td>$IdTelefone</td> 
</tr>
<tr>
	<th>Telefone:</th>
  	<td>$Telefone</td> 
</tr>
</table>
";

// carregamos o código HTML no nosso arquivo PDF
$dompdf->loadHtml($codigo_html);

// (Opcional) Defina o tamanho (A4, A3, A2, etc) e a oritenação do papel, que pode ser 'portrait' (em pé) ou 'landscape' (deitado)
$dompdf->setPaper('A4', 'portrait');

// Renderizar o documento
$dompdf->render();

// pega o código fonte do novo arquivo PDF gerado
$dompdf->stream("Dados Prestador $USERID.pdf", ["Attachment" => false] );


?>