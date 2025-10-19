<?php

$usuario = 'root';
$senha = '';
$database = 'sistema_discos';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli ->error)
    {
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
    }


//esse arquivo conecta meu codigo com o banco de dados mysql com xampp