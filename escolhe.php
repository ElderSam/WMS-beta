<?php
    include("sessao.php"); 

 //echo "Olá ".$_SESSION['usuario']."<br><br><br>";

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
    
<link rel="stylesheet" href="style/style.css">


    <title >Opções do sistema!</title>


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
  <br><br><br><br><br>



<div class=" d-flex justify-content-center">
<ul class="list-group" style="max-width: 220px;"> 
    <a id="options" href="#" class="list-group-item list-group-item-action list-group-item-secondary" onclick=""> <b>Opções </b>   <i class="fas fa-chevron-down ml-5"></i> </a>
    <div id="list_options">
    <!--a href="listaUser.php" class="list-group-item list-group-item-action"> Cadastro de Usuário </a-->
    <a href="cad_prod.php" class="list-group-item list-group-item-action"> Cadastro de Produto </a>
    <a href="consulta_user.php" class="list-group-item list-group-item-action"> Consulta de Usuário </a>
    <a href="consulta_prod.php" class="list-group-item list-group-item-action"> Consulta de Produto </a>
    <a href="sair.php" class="list-group-item list-group-item-action list-group-item-danger"> Sair do Sistema </a>
    </div>
</ul>
  </div>

     <!-- Footer -->
  <footer>   
      <div class="p-2 copyright text-white" >
        <div class="container text-center">
          <small>Copyright &copy; Elder Samuel - 2019</small>
        </div>                    
</div>
</footer>
<script>

  $(function() {
    $( '#options' ).click(function() {
        $('#list_options').toggle();
    });
    



  })
</script>

</body>
</html>


