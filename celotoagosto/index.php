<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema Alunos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <script>
    function mostrarForm(id){
      document.querySelectorAll(".formulario").forEach(f=>f.style.display="none");
      document.getElementById(id).style.display="block";
    }
  </script>
</head>
<body class="container mt-4">

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#" onclick="mostrarForm('formAdicionar')">Inclusão</a></li>
      <li class="nav-item"><a class="nav-link" href="#" onclick="mostrarForm('formLer')">Consulta</a></li>
      <li class="nav-item"><a class="nav-link" href="#" onclick="mostrarForm('formAlterar')">Alteração</a></li>
      <li class="nav-item"><a class="nav-link" href="#" onclick="mostrarForm('formExcluir')">Exclusão</a></li>
    </ul>
  </div>
</nav>

<!-- Inclusão -->
<div id="formAdicionar" class="formulario" style="display:none;">
  <h3>Adicionar Aluno</h3>
  <form method="POST" action="processa.php">
    <input type="hidden" name="acao" value="adicionar">
    <input class="form-control mb-2" name="RM" placeholder="RM" required>
    <input class="form-control mb-2" name="NomeAluno" placeholder="Nome" required>
    <input class="form-control mb-2" name="SobrenomeAluno" placeholder="Sobrenome">
    <select class="form-control mb-2" name="Sexo">
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
    <input class="form-control mb-2" name="AnoMatricula" placeholder="Ano matrícula">
    <input class="form-control mb-2" name="Curso" placeholder="Curso">
    <button class="btn btn-success">Salvar</button>
  </form>
</div>

<!-- Consulta -->
<div id="formLer" class="formulario" style="display:none;">
  <h3>Alunos cadastrados</h3>
  <?php
    $res = $conn->query("SELECT * FROM alunos");
    echo "<table class='table table-bordered'><tr><th>RM</th><th>Nome</th><th>Sobrenome</th><th>Sexo</th><th>Ano</th><th>Curso</th></tr>";
    while($row = $res->fetch_assoc()){
      echo "<tr><td>{$row['RM']}</td><td>{$row['NomeAluno']}</td><td>{$row['SobrenomeAluno']}</td><td>{$row['Sexo']}</td><td>{$row['AnoMatricula']}</td><td>{$row['Curso']}</td></tr>";
    }
    echo "</table>";
  ?>
</div>

<!-- Alteração -->
<div id="formAlterar" class="formulario" style="display:none;">
  <h3>Alterar Aluno</h3>
  <form method="POST" action="processa.php">
    <input type="hidden" name="acao" value="alterar">
    <input class="form-control mb-2" name="RM" placeholder="RM do aluno" required>
    <input class="form-control mb-2" name="NomeAluno" placeholder="Novo Nome">
    <input class="form-control mb-2" name="SobrenomeAluno" placeholder="Novo Sobrenome">
    <input class="form-control mb-2" name="Curso" placeholder="Novo Curso">
    <button class="btn btn-warning">Alterar</button>
  </form>
</div>

<!-- Exclusão -->
<div id="formExcluir" class="formulario" style="display:none;">
  <h3>Excluir Aluno</h3>
  <form method="POST" action="processa.php">
    <input type="hidden" name="acao" value="excluir">
    <input class="form-control mb-2" name="RM" placeholder="RM do aluno" required>
    <button class="btn btn-danger">Excluir</button>
  </form>
</div>

</body>
</html>
