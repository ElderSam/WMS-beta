<?php

include("../conecta.php"); //volta uma pasta e chama a conexão no arquivo 

if(isset($_GET['id'])){
    $id = $_GET['id'];
   


    //pesquisa o id na tabela de raças
    $sql = "select * from produto where id=" . $id;


    //consulta na tabela
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $linha = $consulta->fetch(PDO::FETCH_OBJ);

    //echo " Nome: " . $linha->nome;
            
    
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
       <!--Bootstrap -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   

</head>
<body>
<br><br>
<div class="mx-auto bg-light p-3" style="max-width: 20rem;">

    <p>Tem certeza que quer EXCLUIR o produto <?php echo $linha->dscProd; ?> ?</p>
    <br><br>
    <a class="btn btn-info" href="../consulta_prod.php">Não</a>
    <a class="btn btn-danger" href="delete_prod.php?id=<?php echo $id;?>">Sim</a>

</div>



</body>
</html>

