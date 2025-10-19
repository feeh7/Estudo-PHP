<?php
include('../../../config/conexao.php');


if (isset($_POST['email']) || isset($_POST['senha'])) 
    {
        if (strlen($_POST['email']) == 0) 
            {
                echo "Prencha seu email";
            }
        else if (strlen($_POST['senha']) == 0) 
            {
                 echo "Prencha sua senha";
            }
        else 
            {
                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);

                $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $quantidade_registro = $sql_query->num_rows;

                if ($quantidade_registro == 1) 
                    {
                        $usuario = $sql_query->fetch_assoc();

                        if (!isset($_SESSION)) 
                            {
                                session_start();
                            }

                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['nome'] = $usuario['nome'];

                        header("Location: ../../main/home/index.php");
                    }
                else 
                    {
                        echo "Falha ao logar! Email ou senha incorretos";
                    }
            }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Entrar</h1>
    <form action="" method="POST">
        <p>
            <label>Email</label>
            <input type="text" name="email" placeholder="Seu email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Sua senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>


