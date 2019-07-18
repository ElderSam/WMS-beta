<?php

include("../conecta.php"); //volta uma pasta e inclui a conexão com o banco de dados


if(isset($_GET['id'])){ //se recebeu o ID da raça á ser deletado do BD
    $id = $_GET['id'];
    

    $sql = "DELETE FROM produto WHERE id=?";

    $deleta=$pdo->prepare($sql);
    $deleta->bindValue(":id",$id,PDO::PARAM_INT);
    $deleta->execute(array($id));
    if($deleta)
    {
        //echo "Exclusão OK";        
        echo "<script>window.location = '../consulta_prod.php?prod=delete';</script>";//volta uma pasta e vai para a pagina de raças
            
        
    }
    else
    {
        //echo "Erro ao excluir";      
        echo "<script>window.location = '../consulta_prod.php?prod=notDelete';</script>";//volta uma pasta e vai para a pagina de raças           
    }


    

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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">    

</head>
<body class="bg-secondary">


    <!-- TOASTR.JS -->
<script src="https//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--script src="./toastr/toastr.js"></script-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
<?php if(isset($_GET['bd'])){

        if($_GET['bd'] == "BDerror"){  
        ?> toastr.error("Erro ao conectar com o Banco de Dados!");  <?php
        }
       
    }
    
    ?>
</script>
</body>
</html>

