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


		<link rel="stylesheet" href="cadastro.css">
		<style type="text/css">
			fieldset {margin:auto; width:280px;}
		</style>
		
	</head>
	<body>
		
		<div class="content">
			<div class="header" align="center">
            	<img src="photos/kc.jpg" width=200px >
			</div>
			
			
			<div class="nav-bar" align="center">
				<ul class="nav">
					<li><a href="index.php" >Home</a></li>
					<li><a href="top5dishes.php">Top 5 Dishes</a></li>
                   	<li><a href="restaurantes.php">Restaurantes em Sp</a></li>
                  	<li><a href="fale.php">Fale Conosco</a></li>
                  	<li><a href="quem.php">Quem Somos</a></li>
                  	<br>
                  	<br>
                  	<li> <a href="login.php">Login</a></li>
                  	
                  	
				</ul>
			</div>
			
			<div class="content" align="center">
					
					<div class="container" align="center>"
					
			<h1>Cadastramento - Etapa 2 de 3</h1> 
		<form method="POST" action="etapa3.php"> 
			<fieldset>
				<legend>Cadastro - Etapa 2</legend>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				
				<p><label for="telefone">Telefone: </label><input type="text" name="telefone" id="telefone" size="20"></p> 
				<p><input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir"></p> 
			</fieldset>
		</form> 
			
					</div>
					
					<br>
			
			<div class="footer">
				@Developed by : Cho Wan Lim, Leonardo Koralcow, Guilherme Henrique
			</div>
		</div>
	</body>
</html>