<?php
session_start();
if(isset($_POST['submitEntrar']) && !empty($_POST['nomeUsuario']) && !empty($_POST['senha']))
{
    //acessa o sistema
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];
    $erro = login($nomeUsuario, $senha);
}
else
{
    //nao acessa o sistema
    header('Location: index.php');
}
if(isset($_POST['submitCadastro']))
{
    header('Location: pages/paginaCadastro.php');
}
function login($nomeUsuario, $senha)
{
    include_once('conexaoBD.php');
    $sql = "SELECT * FROM usuario WHERE nomeDeUsuario = '$nomeUsuario' and senha = '$senha'";
    $sql2 = "SELECT * FROM administrador WHERE nomeUsuarioAdministrador = '$nomeUsuario' and senha = '$senha'";
    $result = $conexao->query($sql);
   
    if(mysqli_num_rows($result) < 1)
    {
        //caso o usuario nao exista no banco de dados na tabela usuario e retirado as variaveis nome de usuario e senha da sessao
        unset($_SESSION['nomeUsuario']);
        unset($_SESSION['senha']);
        
        $result = $conexao->query($sql2);
        if(mysqli_num_rows($result) < 1)
        {
            //caso o usuario tambem nao exista no banco de dados na tabela administrador as variaveis nome de usuario e senha sao removidas da sessao e o usuario e redirecionado para index.php
            unset($_SESSION['nomeUsuario']);
            unset($_SESSION['senha']);
            $_SESSION['mensagem'] = "NOME DE USUÁRIO OU SENHA INVÁLIDO";
            $respostaHorario = verificaHorario();
            header('Location: index.php');
        }
        else
        {
            //caso o usuario exista no banco de dados na tabela administrador ele e direcionado para a pagina de administrador
            $_SESSION['nomeUsuario'] = $nomeUsuario;
            $_SESSION['senha'] = $senha;
            header('Location: pages/paginaAdministrador.php');
        }
    }
    else
    {
        //caso o usuario exista no banco de dados na tabela usuario ele e direcionado para a pagina de formulario.php
        $_SESSION['nomeUsuario'] = $nomeUsuario;
        $_SESSION['senha'] = $senha;
        $respostaHorario = verificaHorario();
        if($respostaHorario == 'True')
        {
            header('Location: pages/paginaFormulario.php');
        }
        else
        {
            header('Location: index.php');
        }
    }
}
function verificaHorario()
{
    $horarioAtual = date("H:i:s"); // Obtém o horário atual do servidor
    $horarioInicio = "00:01:00"; // Define o horário de início permitido
    $horarioFim = "23:59:00"; // Define o horário de fim permitido
    
    // Verifica se o horário atual está dentro do intervalo permitido
    if ($horarioAtual >= $horarioInicio && $horarioAtual <= $horarioFim)
    {
        return true;
    }
    else
    {
        // Horário não permitido, retorna false
        $_SESSION['mensagemHorario'] = "FORA DO HORÁRIO COMERCIAL DO RU";
        return false;
    }
}
?>
