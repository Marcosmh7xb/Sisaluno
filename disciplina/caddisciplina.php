<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="validacao.js" defer></script>
    <?php include "header.html"; ?>
    <title>Document</title>
</head>
<body>

  <div class="conteudo">
    <form id="form" action="cruddisciplina.php" method="GET">
      
      <label for="">Nome Disciplina </label>
     <input  type="text" name="nomedisciplina" id="nomedisciplina" value="" require >

     <label for="">CH</label>
     <input type="text" name="ch" id="ch" require>
 
     <label for="">Semestre</label>
     <input type="text" name="semestre" id="semstre"> 

    <label for="">Id Professor</label>
     <input type="text" name="idprofessor" id="idprofessor" require>

     <input type="submit" name="cadastrar" value="cadastrar" require  >


    </form>

</div>

</body>
</html>
