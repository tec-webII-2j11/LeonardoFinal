		<?php
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			
			
			strip_tags($nome);
			strip_tags($email);
			
			
			//validação
			$erro = 0;

				if(empty($nome) || strstr($nome, ' ')==FALSE){
					echo "Voce deve preencher o nome corretamente.<br>";
					$erro = 1;
				} 

				if(strlen($email) < 3 || strstr($email, '@')==FALSE){
					echo "Voce deve preencher o e-mail corretamente.<br>";
					$erro = 1;
				}
				
				if ($erro==0) {
					include 'etapa2a.php';
				}
		?>

