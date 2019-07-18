

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Se não fizermos isto, alguns aparelhos móveis vão redimensionar o layout por conta própria e o design responsivo só vai funcionar no desktop! -->
    
    <title>login</title>
    <link rel="stylesheet" href="./style/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">    


</head>
<body>


<!-- Menu Container -->
<div class="boxLogin" id="menu">
  


    <h5 class="text-white bg-dark"><span class="">BEM VINDO!</span></h5>
  
    <div class="row" id="opcMenu" >
      <a href="javascript:void(0)" onclick="openMenu(event, 'Entrar');" id="myLink">
        <div class="col tablink">Entrar</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Cadastrar');">
        <div class="col tablink">Cadastrar</div>
      </a>
    </div>

    <!-- Login -->
    <div id="Entrar" class="menu mb-lg-3">
      <form method="post" action="verifica.php" >
          <h1>Login</h1>
      
          <input type="text" name="login" id="login" placeholder="Usuário" required="" />
          
          <input type="password" name="senha" id="senha" placeholder=" ********" required="" />
          <input type="submit" id="btnLogin" value="Login"  />
          
          <a href="">Esqueci minha senha!</a>
      </form>
      
    </div>

    <!-- Cadastro de Usuário -->
    <div id="Cadastrar" class="menu">
      <form method="post" action="cad_user.php" >
          <h1>Cadastro:</h1>
          <label>Nome:</label>
          <input type="text" name="login" id="login" placeholder="nome de usuário" required="" />
          <label>E-mail:</label>
          <input type="email" name="email" id="email" placeholder="examplo@email.com" required="" />
          <label>Senha:</label>
          <input type="password" name="senha" id="senha" placeholder="sua senha" required="" />
          <input type="submit" id="btnCadastro" value="Cadastra"  />
      </form>
    </div>
    

</div>




<!-- TOASTR.JS -->
<script src="https//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--script src="./toastr/toastr.js"></script-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu"); //pega todos elementos da classe
  for (i = 0; i < x.length; i++) { //some todos os elementos da classe 'menu'
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" bg-secondary", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " bg-secondary";
}
document.getElementById("myLink").click();

<?php
if(isset($_GET['error']) && $_GET['error'] == "Invalid"){  

    ?> toastr.error("Usuário e/ou Senha Incorretos!");  <?php
    }   
  
if(isset($_GET['user'])){

    if($_GET['user'] == "newUser"){  
    ?> toastr.success("Usuário cadastrado com Sucesso!");  <?php
    }
    else if($_GET['user'] ==  "userAlreadyExists"){
      ?> toastr.error("Usuário já existe!");  <?php
    }
    else if($_GET['user'] ==  "error"){
      ?> toastr.error("Erro ao cadastrar Usuário!");  <?php
    }
 
 }
 if(isset($_GET['user']) && ($_GET['user'] == "Logout")){
  $msg = $_GET['user'];
   ?> toastr.info("Você foi desconectado!<br>" );  <?php
  }
  
 if(isset($_GET['bd']) && ($_GET['bd'] == "BDerror")){
 $msg = $_GET['bd'];
  ?> toastr.error("Erro ao conectar no Banco de Dados!<br>" );  <?php
 }
 ?>

</script>


<br><br>
             <!-- Footer -->
  <footer>   
    <div class="p-2 copyright text-white" >
      <div class="container text-center">
        <small>Copyright &copy; Elder Samuel - 2019</small>
      </div>                    
    </div>
  </footer>

</body>
</html>