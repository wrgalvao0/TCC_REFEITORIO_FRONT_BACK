<?php
session_start();
//print_r($_SESSION);
if(isset($_POST['botaoCadastrar']))
{
  $nomeUsuario = $_POST['nomeDeUsuario']; 
  $senha = $_POST['senha']; 
  $nome = $_POST['nomeCompleto'];
  $email = $_POST['email'];
  $matricula = $_POST['matricula'];
  $sexo = $_POST['sex'];
  $dataNascimento = $_POST['dataNascimento'];
  cadastrar($nomeUsuario, $senha, $nome, $email, $matricula, $sexo, $dataNascimento);
}
if(isset($_POST['botaoSair']))
{
  header('Location: index.php');
}
function cadastrar($nomeUsuario, $senha, $nome, $email, $matricula, $sexo, $dataNascimento)
{
  $resultadoContagem = contagemCaracteres($nomeUsuario, $senha);
  if($resultadoContagem)
  {
    include_once('conexaoBD.php');
    $consultaNomeUsuario = "SELECT * FROM usuario WHERE nomeDeUsuario = '$nomeUsuario'";
    $result1 = $conexao->query($consultaNomeUsuario);
    //verifica se ja existe um nome de usuario existente no banco de dados antes de tentar cadastrar
    if(mysqli_num_rows($result1) == 1)
    {
      print_r('<br>');
      $_SESSION['mensagem2'] = "NOME DE USUÁRIO JÁ EXISTE, TENTE OUTRO NOME DE USUÁRIO";
      header('Location: pages/paginaCadastro.php');
    }
    else
    {
      $result2 = mysqli_query($conexao, "INSERT INTO usuario VALUES ('$nomeUsuario', '$senha', '$nome', '$email', '$matricula', '$sexo', '$dataNascimento')");
      if(isset($_SESSION))
      {
        unset($_SESSION['mensagem2']);
      }
      session_destroy();
      header('Location: pages/confirmacaoCadastro.php');
    }
  }
  else
  {
    header('Location: pages/paginaCadastro.php');
  }
}
function contagemCaracteres($nomeUsuario, $senha)
{
  $tamanhoNomeUsuario = strlen($nomeUsuario);
  $tamanhoSenha = strlen($senha);
  if($tamanhoNomeUsuario >= 6 && $tamanhoSenha >= 6  && $tamanhoNomeUsuario <= 12 && $tamanhoSenha <= 12)
  {
    return true;
  }
  else
  {
    $_SESSION['mensagemTamanhoString'] = "MÍN DE 06 E MÁX DE 12 CARACTERES PARA NOME DE USUÁRIO E SENHA";
    return false;
  }
}
?>