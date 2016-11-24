
<html>
    <head>
    <meta charset="utf-8">
    <title>Autenticando</title>
        <script type="text/javascript">
        function loginsucessfully(){
            setTimeout("window.location='home.php'", 800);
        }
            function loginfailed(){
                setTimeout("window.location='etapa1.php'", 1000);
            }
        </script>
    </head>
    <body>
<?php
include "conecta_mysql.php";

$username=strip_tags($_POST['username']);
$senha=strip_tags(sha1($_POST['senha']));

$sql = mysqli_query($conexao, "SELECT * FROM clientes WHERE username ='$username' and senha = '$senha'") or die(mysqli_error());
$row = mysqli_num_rows($sql);


if ($row > 0){
    session_start();
    $_SESSION['username']= $_POST['username'];
    $_SESSION['senha']= $_POST['senha'];
    echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
    echo "<script>loginsucessfully()</script>";
} else{
    echo "<center>Nome de usuário ou senha incorreto! Aguarde um instante para se cadastrar.</center>";
    echo "<script>loginfailed()</script>";
}
?>  
    </body>
</html>  