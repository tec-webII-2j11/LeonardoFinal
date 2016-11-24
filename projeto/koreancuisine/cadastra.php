<?php


			$nome=strip_tags($_POST['nome']);
			$email=strip_tags($_POST['email']);
			$telefone=strip_tags($_POST['telefone']);
			$username=strip_tags($_POST['username']);
			$senha=strip_tags(sha1($_POST['senha']));
			$confirma_senha=strip_tags(sha1($_POST['confirma_senha']));
			
	
	
			
			
			$erro = 0;
			
		if(empty($username) || strlen($username) < 4){
			echo "Você deve preencher o username com pelo menos 4 caracteres.<br />";
		$erro = 1;
		}
		
		if(empty($senha) || strlen($senha) < 5){
			echo "Você deve preencher a senha com pelo menos 5 caracteres.<br />";
		$erro = 1;
		}
		
		if($confirma_senha != $senha){
			echo "A confirmação de senha deve ser igual à senha digitada.<br />";
			$erro = 1;
		}
		
		if(empty($confirma_senha)){
			echo "Você deve preencher a confirmação de senha corretamente.<br />";
			$erro = 1;
		}
		
		if($erro == 0)
		{
			
			
		include "insere.php"; 
			
		}
?>