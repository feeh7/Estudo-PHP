<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) 
    {
       die('Você não pode acessar esta página porque não está logado.<p><a href="../../auth/login/index.php">Entrar</a></p>');
    }


//Aqui ele protege o site, para que o usuario nao entre na pagina home sem estar logado com um usuario
?>

