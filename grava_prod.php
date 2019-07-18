<HTML>
<HEAD>
 <TITLE>Salva Produto no banco</TITLE>
</HEAD>
<BODY>
<?php
      include("sessao.php");
      include("conecta.php");
      echo "Olá ".$_SESSION['login']."<br><br><br>";
      $nome = $_POST['nome'];
      $valor = $_POST['valor'];
      $sql = "insert into produto (nome,valor) values('$nome','$valor')";
      if (mysqli_query($conexao, $sql) )
      {
           echo "Registro Gravado com Suceso";
      }
      else
      {
           echo "Erro: " . $sql . "<br>" . $conexao->error;
      }

mysqli_close($conexao);
?>

<br>  <br>  <br>
<a href="escolhe.php">Volta para página de Opções</a>

</BODY>
</HTML>
