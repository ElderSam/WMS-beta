<?php

include("../conecta.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    //echo "ID: ".$id;


    //pesquisa o id na tabela de produtos
    $sql = "SELECT * FROM produto WHERE id=" . $id;


    //consulta na tabela
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    $linha = $consulta->fetch(PDO::FETCH_OBJ);

    
}
else if(isset($_GET['idUpdate'])){ //se confirmou a atualizacao

    $idUpdate = $_GET['idUpdate'];
    
        //faz UPDATE
    if(isset($_POST['nome']) ){
       
        $prod = $_POST['nome'];
        $valor = $_POST['valor'];
      
        $sql = "update produto set dscProd=?, valor=?  where id=?";
        $editar=$pdo->prepare($sql);
        $editar->execute(array($prod, $valor, $idUpdate));

                

            if($editar)//se retornou true, então atualizdou com sucesso
            {
               // echo "Atualização OK";               
                echo "<script> window.location = '../consulta_prod.php?prod=update'; </script>"; //volta para a página de produtos com mensagem de sucesso
            }
            else
            {
               // echo "Erro ao atualizar";
                echo "<script> window.location = '../consulta_prod.php?prod=notUpdate'; </script>"; //volta para a página de produtos com mensagem de erro
           
            }

    }

} 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update!</title>
       <!--Bootstrap -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">    

</head>
<body>
  <br>

<form class="mx-auto bg-light p-3" style="max-width: 20rem;" method="POST" action="update_prod.php?idUpdate=<?php echo $linha->id; ?>" enctype="multipart/form-data">

    <h3>Atualização de Produto!</h3>
       
        <div class="form-group">
          <label>Nome:</label>      
            <input type="text" class="form-control" value="<?php echo $linha->dscProd?>" name="nome" required="">        
        </div> 
        <label>Valor:</label>      
            <input type="text" class="form-control" value="<?php echo $linha->valor?>" name="valor" required="">        
        </div> 
    <br>

    <a class="btn btn-light" href="../consulta_prod.php"> Cancelar </a>
    <input class="btn btn-success" type="submit" value="Alterar" />
    <br><br>
    <a class="btn btn-info" href="../consulta_prod.php">Lista de Produtos!</a>
</form>

          

       


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

    $("#especie").click(function(){
        //alert("Tem certeza que quer mudar?");
        $("#first_esp").html("");

    });
		
</script>
</body>
</html>

