<?php
	
     $nome  =$_POST["nome"];
    $email =$_POST["email"];
    $telefone =$_POST["telefone"];
    $username =$_POST["username"];
    $senha =$_POST["senha"];
    
    ////////////////
    include "conecta_mysql.php";
    
    $resultado= mysqli_query($conexao,"DELETE FROM clientes WHERE username='$username'") 
    or die ("Não foi possível executar a SQL:".mysqli.error($conexao));
    
    if($resultado === TRUE){
        echo "<br/>Usuario removido com sucesso.";
    } else {
        echo "<br/>Erro ao remover usuario.";

    }
		
    mysqli_close($conexao);
    include "home.php";
?>