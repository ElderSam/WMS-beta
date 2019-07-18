<HTML>
<HEAD>
 <TITLE>Salva usuário no banco</TITLE>
</HEAD>
<BODY>
<?php   //grava usuario------------------------------------------------------

      include("conecta.php");
   // if(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $sql = "insert into usuario (login,senha) values('$login','$senha')";
        if (mysqli_query($conexao, $sql) )
        {
            //echo "Registro Gravado com Suceso"; 
            echo "<script>alert('Registro Gravado com Suceso');</script>";
            
        }
        else
        {
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }

        mysqli_close($conexao);
        
        header('location: consulta_user.php');
   // }

?>

<br>  <br>  <br>
<a href="consulta_user.php">consultar usuários</a>

</BODY>
</HTML>

