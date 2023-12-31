<?php include "header.html"; ?>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');

##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $endereco = $_GET["endereco"];
        $datanascimento = $_GET["datanascimento"];
        $estatus= $_GET["estatus"];
        $matricula= $_GET["matricula"];

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,idade,endereco,datanascimento,estatus,matricula) 
                VALUES('$nome','$idade', '$endereco', '$datanascimento', '$estatus','$matricula')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco=$conexao->prepare($sql);

        ##executa o sql no banco de dados

        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi incluido com sucesso!!!"; 
                echo " <button class='button'> <a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POS
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $endereco = $_POST["endereco"];
    $datanascimento = $_POST["datanascimento"];
    $estatus= $_POST["estatus"];
    $matricula= $_POST["matricula"];
   
      ##codigo sql
    $sql = "UPDATE aluno SET nome= :nome, idade= :idade, endereco= :endereco, datanascimento= :datanascimento, estatus= :estatus, matricula= :matricula WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_INT);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->bindParam(':matricula',$matricula, PDO::PARAM_STR);

 


    if($stmt->execute())
        {
            echo " <strong> OK! </strong> o aluno
             $nome foi Alterado com sucesso!!!"; 
           echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno

             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>

<?php include "../footer.html"; ?>