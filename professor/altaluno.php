<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include "header.html"; ?>
<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $cpf = $array_retorno['cpf'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];

?>
<div class="conteudo">

  <form method="POST" action="crudaluno.php">

        <input type="text" name="nome" id="" value=<?php echo $nome?>>

        <input type="text" name="cpf" id="" value=<?php echo $cpf?>>
                                          
        <input type="text" name="idade" id="" value=<?php echo $idade ?>>

        <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento ?>> 

        <input type="text"  name="endereco" id="" value=<?php echo $endereco ?>>

        <input type="text" name="estatus" id="" value=<?php echo $estatus ?>>
       
     
        
        <input type="submit" name="update" value="Alterar">
  </form>
</div>
</body>
</html>