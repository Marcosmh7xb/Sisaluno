<?php include "../header.html"; ?>
<?php 
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?> 

     
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container mt-3">
       
  <table class="table table-striped">
  
                    <th>ID</th>
                    <th>NOME DISCIPLINA</th>
                    <th>CH</th>
                    <th>SEMESTRE</th>
                    <th>ID PROFESSOR</th>
                   
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nomedisciplina']?>  </td> 
                            <td> <?php echo $value['ch']?> </td>
                            <td> <?php echo $value['semestre']?> </td> 
                            <td> <?php echo $value['idprofessor']?> </td> 
                            




                            <td>
                               <form method="POST" action="altdisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="cruddisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 

                             
                             



                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        </body>
</html>
<?php         
   echo "<button class='button button3'><a href='index.php'>voltar</a></button>";
   echo "<button class='button button3'><a href='caddisciplina.php'>novo</a></button>";
?>