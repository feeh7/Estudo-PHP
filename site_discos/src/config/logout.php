<?php

if (!isset($_SESSION)) 
    {
        session_start();
    }

session_destroy();

header("Location: ../containers/auth/login/index.php");


//esse codigo faz com que o usuario possa sair na aba home do site "ai está a logica"
?>

