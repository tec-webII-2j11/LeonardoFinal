<?php

include "conecta_mysql.php";

$resultado= mysqli_query($conexao, "SELECT * from clientes") or die("Não foi possível retornar a SQL:".mysqli.error($conexao));
if($resultado){
    while ($row = mysqli_fetch_array($resultado)){
        echo "Username: ".$row ["username"]." - ". "NOME: ".$row["nome"]." - ". "Email: ".$row["email"]."<br/>";
        
    }
}

mysqli_close($conexao);

?>