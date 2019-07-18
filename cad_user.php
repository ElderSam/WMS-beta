<?php

/* -- cadastro   --  */    

    if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['senha'])){
        include("conecta.php");
        

        $sql = "SELECT * FROM usuario WHERE (login = :USUARIO) ";
        
        $linhas = 0;
        $resultado = $pdo->prepare($sql);

        $usuario = $_POST['login'];
        $email = $_POST['email'];
        $p = $_POST['senha']; //alnum só aceita letras e números, impede SQL injection
        $senha = hash('sha3-512' , $p); //senha com criptografia SHA3 para não ver no BD

        $resultado->bindValue(":USUARIO", $usuario);
  

    	$resultado->execute();

        $num = $resultado->rowCount(); 
               
            if( $num != 0 ){
              /*  header("location: index.php?user=userAlreadyExists");*/
              echo "<script> window.location = 'index.php?user=userAlreadyExists';</script>";
        
      
               
            }
            else{
                
                $sql = "INSERT INTO usuario (login, email, senha) 
                VALUES (:USUARIO, :EMAIL, :SENHA)";
                $resultado = $pdo->prepare($sql);

                $resultado->bindValue(":USUARIO", $usuario);
                $resultado->bindValue(":EMAIL", $email);
                $resultado->bindValue(":SENHA", $senha);

                $resultado->execute();

                $num = $resultado->rowCount();
                            
                            
                            
                            

                if ($num > 0 )
                {
                    //echo "<div style='background-color: green; color: white;'><br>Usuário Cadastrado com Suceso<br><br></div>";
                    //Redireciona para a página de autenticação
                   /* header("location: index.php?user=newUser");*/
                   echo "<script> window.location = 'index.php?user=newUser';</script>";
                }
                else 
                {
                    // echo "Erro: " . $sql . "<br>" . $conexao->error;
                    $erro =  $sql;
                    // echo "<div style='background-color: red; color: white;'><br>Usuário não foi Cadastrado<br><br> Erro:". $sql . "<br>" . $conexao->error."</div>"  ;
                    //Redireciona para a página de autenticação
                   /* header("location: index.php?user=error");*/
                   echo "<script> wondow.location = 'index.php?user=error';</script>";
                }
        
                
            }
 
    } 

?>

<!--html lang="pt-br">
<head>
    <meta charset="utf-8">
 <TITLE>Cadastro de Usuário</TITLE>
 <link rel="stylesheet" href="./style/login.css">
</head>
<body>


<form class="box" method="post" action="index.php" >
<h1>Cadastro:</h1>
<label>Nome:</label>
<input type="text" name="login" id="login" placeholder="nome de usuário"/><br />
<label>Senha:</label>
<input type="password" name="senha" id="senha" /><br />
<input type="submit" value="Cadastra"  />
</form>


</body>
</html-->
