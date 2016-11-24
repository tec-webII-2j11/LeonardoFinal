


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="icon" type="image/gif" href="photos/korea.gif"  />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Korean Cuisine</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">


		<link rel="stylesheet" href="index.css">
	</head>
	<body>
		<div class="container">
			<div class="header" align="center">
            	<img src="photos/kc.jpg" width=200px >
			</div>
			<div class="nav-bar" align="center">
				<ul class="nav">
					<li><a href="index.php" >Home</a></li>
					<li><a href="top5dishes.php">Top 5 Dishes</a></li>
					<li><a href="receitas.php">Receitas</a></li>
                   	<li><a href="restaurantes.php">Restaurantes em Sp</a></li>
                  	<li><a href="fale.php">Fale Conosco</a></li>
                  	<li><a href="quem.php">Quem Somos</a></li>
                  	<br>
                  	<br>
                  	<li> <a href="login.php">Login</a></li>
                  	<li> <a href="etapa1.php">Cadastre-se!</a></a></li>
				</ul>
			</div>
			<div class="content" align="center">
				<div class="main">
					<h1>Dados Cadastrados:</h1>
					<fieldset>

	    <?php
	
		

   
    
    	$nome=strip_tags($_POST['nome']);
			$email=strip_tags($_POST['email']);
			$telefone=strip_tags($_POST['telefone']);
			$username=strip_tags($_POST['username']);
			$senha=strip_tags(sha1($_POST['senha']));
			$confirma_senha=strip_tags(sha1($_POST['confirma_senha']));
    
    ////////////////
    include "conecta_mysql.php";
    
    $resultado= mysqli_query($conexao,"INSERT INTO clientes(nome, email, telefone, username, senha) VALUES('$nome','$email', '$telefone', '$username', '$senha')");
    
    
    
    if($resultado === TRUE){
        echo "<br/>Usuario inserido com sucesso.";
    } else {
        echo "<br/>Erro ao inserir usuario.";

    }
		
    mysqli_close($conexao);
?>
</fieldset>
<br>
<br>
<br>
<br>
<br>

				</div>
            <img src="photos/kfood.jpg" width=700px >
			</div>
			<div class="footer">
				@Developed by : Cho Wan Lim, Leonardo Koralcow, Guilherme Henrique
			</div>
		</div>
	</body>
</html>