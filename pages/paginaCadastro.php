<?php
session_start();
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="shortcut icon" href="IMAGENS/logo unifesspa_transparente.svg" type="image/x-icon">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/cadastro.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CADASTRO</title>
</head>
 <header class="cabecalho">
    <img id="logoUnifesspa" src="../img/LOGO UNIFESSPA.png">
    <h3>PÁGINA DE CADASTRO</h3>
  </header>
<body>
  <form action="../cadastro.php" method="POST" id="cadastroUsuario">
    <fieldset class="box"><legend class="titulosBox">CADASTRO DE LOGIN</legend>
      <div class="inputBox">
        <input placeholder="NOME DE USUÁRIO" type="text" name="nomeDeUsuario" class="campoInput" required>
      </div>
      <div class="inputBox">
        <input placeholder="SENHA" type="text" name="senha" class="campoInput" required>
      </div>
      <?php
      if(isset($_SESSION['mensagemTamanhoString']))
      {
        echo "<p class = 'mensagemCadastro'>$_SESSION[mensagemTamanhoString]</p>";
        unset($_SESSION['mensagemTamanhoString']);
      }
      ?>
    </fieldset>
    <fieldset class="box"><legend class="titulosBox">IDENTIFICAÇÃO DO USUÁRIO</legend>
      <div class="inputBox">
        <input placeholder="NOME COMPLETO" type="text" name="nomeCompleto" class="campoInput" required>
      </div>
      <div class="inputBox">
        <input placeholder="EMAIL" type="text" name="email" class="campoInput" required>
      </div>
      <div class="inputBox">
        <input placeholder="MATRÍCULA / OPCIONAL" type="text" name="matricula" class="campoInput">
      </div>

      <div class="sexo">
        <p>SEXO:</p>
        <div class="input-opcao">
          <input name="sex" type="radio" id="inmasc" value="M" required>
          <label for="inmasc" class="labelSexo">MASCULINO</label>
        </div>
        <div class="input-opcao">
          <input name="sex" type="radio" id="infem" value="F" required>
          <label for="infem" class="labelSexo">FEMININO</label>
        </div>
        <div class="input-opcao">
          <input name="sex" type="radio" id="inoutros" value="O" required>
          <label for="inoutros" class="labelSexo">OUTROS</label>
        </div>
      </div>
      <label id="labelDataNascimento" for="dataNascimento">DATA DE NASCIMENTO</label>
      <input id="dataNascimento" name="dataNascimento" type="date" class="campoInput" required>
    </fieldset>
    <?php
    if(isset($_SESSION['mensagem2']))
    {
      echo "<p class = 'mensagemCadastro'>$_SESSION[mensagem2]</p>";
      unset($_SESSION['mensagem2']);
      //session_destroy();
    } 
    ?>
      <div class="botoes">
        <input type="submit" value="CADASTRAR" name="botaoCadastrar" class="botao">
        <input type="submit" value="SAIR" name="botaoSair" class="botao">
      </div>
  </form>
</body>
</html>
