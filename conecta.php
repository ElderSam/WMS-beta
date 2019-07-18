
<?php

   $HOSTNAME = "localhost"; 			
   $USERNAME = "root"; 			
   $PASSWORD = ""; 			
   $DBNAME = "aula"; 	
   /*$USERNAME = "id9414399_elder"; 			
   $PASSWORD = "admin123bd"; 			
   $DBNAME = "id9414399_bd_portfolio"; */


//Conexão mysql
try{

$pdo = new PDO(
   "mysql:dbname=".$DBNAME.";host=".$HOSTNAME, $USERNAME, $PASSWORD);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e){
   echo  'ERROR: ' . $e->getMessage();
   header('Location: index.php?bd=BDerror');

}


?>