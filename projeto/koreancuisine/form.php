<!DOCTYPE html>
<html lang="en">
	<head>
		
		
	
		<meta charset="utf-8">
        <link rel="icon" type="image/gif" href="photos/korea.gif"  />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Korean Cuisine - CRUD</title>
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
	<form action="crud.php" method="POST">
		<input  type="radio"name="tipoCRUD" value="C" checked/> Create <br/>
		<input  type="radio"name="tipoCRUD" value="R" /> Read <br/>
		<input  type="radio"name="tipoCRUD" value="U" /> Update <br/>
		<input  type="radio"name="tipoCRUD" value="D" /> Delete <br/>
		<input type="submit" value="START"/>
		
	</form>
	</div>
            <img src="photos/kfood.jpg" width=400px >
			</div>
			<div class="footer">
				@Developed by : Cho Wan Lim, Leonardo Koralcow, Guilherme Henrique
			</div>
		</div>
	</body>
</html>