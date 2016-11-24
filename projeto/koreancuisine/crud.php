


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
                   	<li><a href="restaurantes.php">Restaurantes em Sp</a></li>
                  	<li><a href="receitas.php">Receitas</a></li>
                  	<li><a href="fale.php">Fale Conosco</a></li>
                  	<li><a href="quem.php">Quem Somos</a></li>
                  	<li><a href="logout.php"> Logout </a></li>
                  	<br>
                  	<br>

				</ul>
			</div>
			<div class="content" align="center">
				<div class="main">
					<?php 
$opcao= $_POST['tipoCRUD'];
switch($opcao){
    case "C":
        echo "<h3> CRIAR </h3>
        <fieldset>
        <form action='create.php' method='POST'>
            Nome: <input type='text' name='nome'/><br/>
            Email: <input type='text' name='email'/> <br/>
            Telefone: <input type='text' name='telefone'/> <br/>
            Username: <input type='text' name='username'/> <br/>
            Senha: <input type='password' name='senha' id='senha'/> 
            <input type='submit' value='INSERIR'/>
            </form>
            </fieldset>";
     break;


   
       case "R":
        echo "<h3> LER </h3>
        <form action='read.php' method='POST'>
        
           <input type='submit' value='BUSCAR'/>
            </form>";
    break;
   
   
   
       case "U":
   echo "<h3> UPDATE </h3>
        <fieldset>
        <form action='update.php' method='POST'>
            Nome: <input type='text' name='nome'/> <br/>
            Email: <input type='text' name='email'/> <br/>
            Telefone: <input type='text' name='telefone'/> <br/>
            Username: <input type='text' name='username'/> <br/>
            Senha: <input type='password' name='senha' id='senha'/>
            <input type='submit' value='ATUALIZAR'/>
            </form>
            </fieldset>";
    break;
   
   
    case "D":
   echo "<h3> DELETE </h3>
        <form action='delete.php' method='POST'>
            Username: <input type='text' name='username'/> <br/>
            <input type='submit' value='DELETAR'/>
            </form>";
    break;
    
    
}


?>
				</div>
            <img src="photos/kfood.jpg" width=400px >
			</div>
			<div class="footer">
				@Developed by : Cho Wan Lim, Leonardo Koralcow, Guilherme Henrique
			</div>
		</div>
	</body>
</html>