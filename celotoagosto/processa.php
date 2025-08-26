<?php
include("conexao.php");

$acao = $_POST['acao'];

if($acao == "adicionar"){
    $sql = "INSERT INTO alunos (RM, NomeAluno, SobrenomeAluno, Sexo, AnoMatricula, Curso) 
            VALUES ('{$_POST['RM']}','{$_POST['NomeAluno']}','{$_POST['SobrenomeAluno']}','{$_POST['Sexo']}','{$_POST['AnoMatricula']}','{$_POST['Curso']}')";
    $conn->query($sql);
    echo "Aluno adicionado! <a href='index.php'>Voltar</a>";
}

if($acao == "alterar"){
    $sql = "UPDATE alunos SET 
            NomeAluno='{$_POST['NomeAluno']}',
            SobrenomeAluno='{$_POST['SobrenomeAluno']}',
            Curso='{$_POST['Curso']}'
            WHERE RM='{$_POST['RM']}'";
    $conn->query($sql);
    echo "Aluno alterado! <a href='index.php'>Voltar</a>";
}

if($acao == "excluir"){
    $sql = "DELETE FROM alunos WHERE RM='{$_POST['RM']}'";
    $conn->query($sql);
    echo "Aluno excluído! <a href='index.php'>Voltar</a>";
}
?>
