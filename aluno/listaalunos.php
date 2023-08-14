<?php include "header.html"; ?>
<?php 
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
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
  
     <th>IDALUNO</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>ENDEREÇO</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>ESTATUS</th>
                    <th>MATRICULA</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id'] ?>   </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['idade']?> </td>
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['datanascimento']?> </td> 
                            <td> <?php echo $value['estatus']?> </td> 
                            <td> <?php echo $value['matricula']?> </td> 




                            <td>
                               <form method="POST" action="altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button id="a" name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button  id="a" name="excluir"  type="submit">Excluir</button>
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
   echo "<button id=('a') class='button button3'><a href='index.php'>voltar</a></button>";
   echo "<button id=('a') class='button button3' style=''><a href='cadaluno.php'>novo</a></button>";
?>
