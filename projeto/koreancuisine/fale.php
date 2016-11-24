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
        <script src="fale.js"></script>


		<link rel="stylesheet" href="fale.css">
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
            	<form name="meu_form"> 
                <h1>Entre em contato</h1> 
                <p class="nome"> <input type="text" id="nomeid" placeholder="Digite o seu nome" required name="nome" /> <label for="nome">Nome</label> </p> 
                <p class="fone"> <input type="text" id="foneid" placeholder="(xx)xxxx-xxxx" name="telefone" /> <label for="fone">Telefone</label> </p> 
                <p> <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" /> <label for="email">E-mail</label> </p> 
                <p> <textarea placeholder="Deixe sua opnião"></textarea> </p> <p class="submit"> <input type="submit" onclick="Enviar();" value="Enviar" /> </p> </form> 
  

 
           
			<div class="footer">
				@Developed by : Cho Wan Lim, Leonardo Koralcow, Guilherme Henrique
			</div>
		</div>
	</body>
</html>