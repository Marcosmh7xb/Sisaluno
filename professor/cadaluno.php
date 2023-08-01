<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php include "header.html"; ?>
</head>
<body>

  <div class="conteudo">
  <form method="GET" action="crudaluno.php">

    <label for="">Nome </label>
     <input type="text" name="nome" required value="" >

     <label for="">Cpf</label>
     <input type="text" name="cpf">

     <label for="">Idade</label>
     <input type="text" name="idade">

     <label for="">Datadenacimento</label>
     <input type="date" name="datanascimento"> 

     <label for="">Endereco</label>
     <input type="text" name="endereco"> 

     <label for="">Estatus</label>
     <input type="text" name="estatus">
    
     <input type="submit" name="cadastrar" value="cadastrar">
  </form>
</div>

     <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>