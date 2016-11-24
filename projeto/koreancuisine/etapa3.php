<?php
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$telefone=$_POST["telefone"];

			strip_tags($nome);
			strip_tags($email);
			strip_tags($telefone);
			
			//validação
			$erro = 0;

				if(empty($telefone) || strlen($telefone) < 8){
					echo "Voce deve preencher o telefone corretamente.<br />";
					$erro = 1;
				}

				
				if ($erro==0) {
					include 'etapa3a.php';
				}
		?>
