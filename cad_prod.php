<?php
    include("sessao.php");
    include("conecta.php");


  if(isset($_POST['nome']) && isset($_POST['valor'])) {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $sql = "INSERT INTO produto (dscProd,valor) VALUES(?,?)";
    $new = $pdo->prepare($sql);
    $new->execute(array($nome, $valor));
    if ($new)
    {
         
         //echo "<div style='background-color: green; color: white;'><br>Produto Cadastrado com Suceso<br><br></div>";
         /*header("Location: cad_prod.php?prod=new") ;*/
         echo "<script> window.location = 'cad_prod.php?prod=new';</script>";

    }
    else
    {
         //echo "<div style='background-color: red; color: white;'><br>Produto Cadastrado com Suceso<br><br> Erro:". $sql . "<br>" . $conexao->error."</div>"  ;
/*header("Location: cad_prod.php?prod=error") ;*/
         echo "<script> window.location = cad_prod.php?prod=error'</script>";
    }

    
  }


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">   
      <!-- Toastr.js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">    
   
    <link rel="stylesheet" href="style/style.css">

    <title >Cadastra de Produtos!</title>
  </head>
  
  <body>

  

    <!-- Navigation -->
    <div class="header fixed-top">
        <a href="#"><img  id="logo" class="img-fluid rounded-circle" src="./img/logo.png" width="80" height="80"  alt=""></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>
        <a id="textLogo" class="text-light pl-3" href="#"> <b> Sistema PHP</b></a>
        
        <ul class="menu">
            <a class="btn btn-info" href="consulta_prod.php">Produtos</a>
            <a class="btn btn-dark" href="consulta_user.php">Usuários</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>

            <a href="#"><i class="fas fa-user-circle fa-2x"></i> <?php echo $_SESSION['usuario'];?>
            </a>
            <a href="sair.php"><i class="fas fa-sign-out-alt"></i> Sair
            </a>
        </ul>
        
    </div>
  <br><br><br><br><br><br>


 <div class=" d-flex justify-content-center">
  <div  style="padding-left: 30px; width: 300px; " >


    <form class="bg-light text-dark" style="padding: 15px;" method="POST" action="">
    <h3>Cadastro de Produto:</h3><br>    
    <div class="form-group"> 
            <label for="nome">Nome:</label>
            <input type="text" class="form-control"  placeholder="nome do produto" name="nome" id="nome" />
        </div>
        <div class="form-group">
            <label>Valor (R$)</label>
            <input type="text" class="form-control" placeholder="10.00" name="valor" id="valor" />
            </div>
            <button type="submit" class="btn btn-primary">Cadastra</button>
    </form>

    <br><br>
     <a href="consulta_prod.php" class="btn btn-outline-dark">consultar produtos</a>
    
    </div>
    </div>
<br><br>


         <!-- Footer -->
  <footer>   
    <div class="p-2 copyright text-white" >
      <div class="container text-center">
        <small>Copyright &copy; Elder Samuel - 2019</small>
      </div>                    
    </div>
  </footer>

         <!-- TOASTR.JS -->
         <script src="https//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--script src="./toastr/toastr.js"></script-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
  <script>
     <?php if(isset($_GET['prod'])){
        if($_GET['prod'] == "new"){    ?>
          toastr.success("Produto cadastrado com sucesso!");
  <?php }
        else if($_GET['prod'] == "error"){  ?>
          toastr.error("Ocorreu um erro ao cadastrar o produto!");
<?php   }
      } ?>
  </script>
  </body>
</html>


