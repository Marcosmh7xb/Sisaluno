<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="validacao.js" defer></script>
    <title>Document</title>
</head>
<body>
<?php include "header.html"; ?>
  <div class="conteudo">
  <form id="form" method="GET" action="crudaluno.php">

    <label for="">nome </label>
     <input type="text" name="nome" id="nome" value="" >

     <label for="">idade</label>
     <input type="text" name="idade" id="idade" >
 
     <label for="">endereco</label>
     <input type="text" name="endereco" id="endereco"> 

     <label for="">datadenacimento</label>
     <input type="date" name="datanascimento" id="datanascimento">

     <label for="">estatus</label>
     <input type="text" name="estatus" id="estatus">

     <label for="">matricula</label>
     <input type="text" name="matricula" id="matricula">

     <input type="submit" name="cadastrar" value="cadastrar">
  </form>
</div>

     <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>