<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="validacao3.js" dechex></script>
    <title>Document</title>
</head>
<body>
<?php include "../header.html"; ?>
  <div class="conteudo">
  <form id="form" method="GET" action="crudaluno.php">

    <label for="">Nome </label>
     <input type="text" name="nome" id="nome" value="" require>

     <label for="">Idade</label>
     <input type="text" name="idade" id="idade"  require>
 
     <label for="">Endereço</label>
     <input type="text" name="endereco" id="endereco" require> 

     <label for="">Data de Nascimento</label>
     <input type="date" name="datanascimento" id="datanascimento">

     <label for="">Estatus</label>
     <input type="text" name="estatus" id="estatus" require>

     <label for="">Matricula</label>
     <input type="text" name="matricula" id="matricula">

     <input type="submit" name="cadastrar" value="cadastrar">
  </form>
</div>

     <button id="a" class="button" ><a href="index.php">Voltar</a></button>

  
</body>
</html>

