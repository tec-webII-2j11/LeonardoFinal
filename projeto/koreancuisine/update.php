<?php
	
     $nome  =$_POST["nome"];
    $email =$_POST["email"];
    $telefone =$_POST["telefone"];
    $username =$_POST["username"];
    $senha =$_POST["senha"];
    
    ////////////////
    include "conecta_mysql.php";
    
    $resultado= mysqli_query($conexao,"UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', senha='$senha' WHERE username='$username'") 
    or die ("Não foi possível executar a SQL:".mysqli.error($conexao));
    
    if($resultado === TRUE){
        echo "<br/>Usuario alterado com sucesso.";
    } else {
        echo "<br/>Erro ao alterar usuario.";

    }
		
    mysqli_close($conexao);
     include "home.php";
?>