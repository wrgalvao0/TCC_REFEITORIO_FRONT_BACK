<?php
if(isset($_SESSION))
{
  session_destroy();
}
session_start();
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="shortcut icon" href="IMAGENS/logo unifesspa_transparente.svg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TELA DE LOGIN</title>
  
</head>
<body>
    <img id="LOGO" src="img/LOGO UNIFESSPA.png" alt="logo unifesspa">
    <div class="box-login">
        <h1>Login</h1>
        <form action="acessoLogin.php" method="POST">
          <input type="text" name="nomeUsuario" placeholder="NOME DE USUÁRIO" class="campoInput">
          <br><br>
          <input type="password" name="senha" placeholder="SENHA" class="campoInput">
          <br><br>
          <input type="submit" value="ENTRAR" name="submitEntrar" class="botao">
          <input type="submit" value="CADASTRE-SE" name="submitCadastro" class="botao">
          <?php 
          if(isset($_SESSION['mensagem']))
          {
            echo "<p class = 'mensagemLogin'>$_SESSION[mensagem]</p>";
            unset($_SESSION['mensagem']);
          }
          if(isset($_SESSION['mensagemHorario']))
          {
            echo "<p class = 'mensagemLogin'>$_SESSION[mensagemHorario]</p>";
            unset($_SESSION['mensagemHorario']);
          }
          if(isset($_SESSION['mensagem']) && isset($_SESSION['mensagemHorario']))
          {
            echo "<p class = 'mensagemLogin'>$_SESSION[mensagem]</p>"; 
            echo "<p class = 'mensagemLogin'>$_SESSION[mensagemHorario]</p>";
            unset($_SESSION['mensagem']);
            unset($_SESSION['mensagemHorario']);
          }
          ?>
        </form>
      </div>
</body>
</html>