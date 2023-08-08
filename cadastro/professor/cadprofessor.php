<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="validacao.js" defer> </script>
    <title>Document</title>
    <?php include "../header.html"; ?>
</head>
<body>

  <div class="conteudo">
  <form id="form" method="GET" action="crudprofessor.php">

    <label for="">Nome </label>
     <input type="text" name="nome" id="nome" require >

     <label for="">Cpf</label>
     <input type="text" name="cpf" id="cpf" require >

     <label for="">Idade</label>
     <input type="text" name="idade" id="idade">

     <label for="">Datadenacimento</label>
     <input type="date" name="datanascimento" require > 

     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco"> 

     <label for="">Estatus</label>
     <input type="text" name="estatus" id="estatus" require >
    
     <input type="submit" name="cadastrar" value="cadastrar">
  </form>
</div>

     <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>
