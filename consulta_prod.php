<?php
    include("sessao.php");
    include("conecta.php");

?>


<!doctype html>
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

    <title >Consulta de Produtos!</title>
  
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
  <br><br><br><br>


 <section class="mx-auto bg-white p-3 d-flex justify-content-center">
     <div style="padding-left: 30px; max-width: 50rem;">
     <a href="cad_prod.php" class="btn btn-success">cadastrar</a>
    <br><br>
     <h3 class='text-center p-2 mb-2 bg-secondary text-white'>Produtos Cadastrados:</h3>
   


    <?php
        $sql = "SELECT * FROM produto";
        $result= $pdo->prepare($sql);
        $result->execute(); 
        $r = $result->fetchAll(PDO::FETCH_OBJ);//fetch =(fatia a tabela)linha por linha (cria um array)
    ?>

<a href="consulta_prod.php" class="btn btn-success">Filtrar</a>
    <br><br>

    <table class="table table-striped table-hover">
      <thead class="bg-dark text-light">
      <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">opções</th>
    </tr>
      </thead>
      <tbody>
        <?php
            foreach($r as $linha)
            {
              echo "<tr>";
              echo "<th scope='row'>".$linha->id."</th> ";
              echo "<td>".$linha->dscProd ."</td>";
              echo "<td> R$ ". $linha->valor ."</td>";

              echo "<td> <!--a class='btn btn-warning btn-sm btn-circle' href='...php?id=" .  $linha->id . " '> <i class='fas fa-bars'></i> </a-->
              <a class='btn btn-info btn-sm btn-circle' href='produto/update_prod.php?id=" .  $linha->id . " '>  <i class='fas fa-edit'></i>  </a>
              <a class='btn btn-danger btn-sm btn-circle' href='produto/notice_delete.php?id=" .  $linha->id . " '> <i class='fas fa-trash'></i> </a> </td>";
              echo "</tr>";
            }
        ?>
      </tbody>
    </table>
      <?php
          $row = $result->rowCount();
          echo "Total de Produtos cadastrados: ".$row."<br><br>";

      ?>
      <br>
      <a href="cad_prod.php" class="btn btn-outline-dark">cadastrar produtos</a>
    </div>
</section>

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
        else if($_GET['prod'] == "delete"){  ?>
          toastr.success("Produto deletado!");
  <?php   }
        else if($_GET['prod'] == "notDelete"){  ?>
          toastr.error("Ocorreu um erro ao deletar o produto!");
  <?php   }
          else if($_GET['prod'] == "update"){  ?>
            toastr.success("Produto atualizado!");
    <?php   }
          else if($_GET['prod'] == "notUpdate"){  ?>
            toastr.error("Ocorreu um erro ao atualizar o produto!");
    <?php   }
      } ?>
  </script>

  </body>
</html>

