 <?php
	
     $nome  =$_POST["nome"];
    $email =$_POST["email"];
    $telefone =$_POST["telefone"];
    $username =$_POST["username"];
    $senha =sha1($_POST["senha"]);
    
    ////////////////
    include "conecta_mysql.php";
    
    $resultado= mysqli_query($conexao,"INSERT INTO clientes(nome, email, telefone, username, senha) VALUES('$nome','$email', '$telefone', '$username', '$senha')");
    
    if($resultado === TRUE){
        echo "<br/>Usuario inserido com sucesso.";
    } else {
        echo "<br/>Erro ao inserir usuario.";

    }
		
    mysqli_close($conexao);
    
    include "home.php";
?>