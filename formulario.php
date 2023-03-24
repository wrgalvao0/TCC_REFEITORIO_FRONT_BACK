<?php
session_start();
$usuarioLogado = verificaUsuarioLogado();
// caso o botao seja acionado, adiciona os dados ao banco de dados
if(isset($_POST['submit']))
{
  $pratoPrincipal = $_POST['inputRadioPratoPrincipal'];
  $acompanhamento = $_POST['inputRadioAcompanhamento'];
  $guarnicao = $_POST['inputRadioGuarnicao'];
  $salada = $_POST['inputRadioSalada'];
  $sobremesa = $_POST['inputRadioSobremesa'];
  $valorRefeicao = $_POST['inputRadioValorRefeicao'];
  $opiniaoValorRefeicao = "NULL";
  if(isset($_POST['opiniaoValorJustoRefeicao']) and $_POST['opiniaoValorJustoRefeicao'] != "")
  {
    $opiniaoValorRefeicao = $_POST['opiniaoValorJustoRefeicao'];
  }
  $tempoFila = $_POST['inputRadioTempoFila'];
  $sugestao = $_POST['campoDeSugestao'];
  $dataAtual = date('Y-m-d');
  cadastraAvalicao($usuarioLogado, $pratoPrincipal, $acompanhamento, $guarnicao, $salada, $sobremesa, $valorRefeicao, $opiniaoValorRefeicao, $tempoFila, $sugestao, $dataAtual);
}
function verificaUsuarioLogado()
{
    /* 
    VERIFICA SE TEM ALGUM USUARIO LOGADO, CASO TIVER ALGUM USUARIO LOGADO SALVA O NOME DE USUARIO EM UMA VARIAVEL PARA ADICIONAR AO BANCO DE DADOS NA HORA DO PREENCHIMENTO DO FORMULARIO, CASO NAO EXISTA USUARIO LOGADO RETORNA PARA PAGINA DE LOGIN.
    */
    if((!isset($_SESSION['nomeUsuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nomeUsuario']);
        unset($_SESSION['senha']);
        header('Location: ../index.php');
    }
    else
    {
        $usuarioLogado = $_SESSION['nomeUsuario'];
    }
    return $usuarioLogado;
}
function cadastraAvalicao($usuarioLogado, $pratoPrincipal, $acompanhamento, $guarnicao, $salada, $sobremesa, $valorRefeicao, $opiniaoValorRefeicao, $tempoFila, $sugestao, $dataAtual)
{
    include_once('conexaoBD.php');
    $result = mysqli_query($conexao, "INSERT INTO avaliacao (nomeDeUsuario, pratoPrincipal, acompanhamento, guarnicao, salada, sobremesa, opiniaoValorRefeicao, opiniaoValorJusto, tempoFila, sugestao, data) VALUES ('$usuarioLogado', '$pratoPrincipal', '$acompanhamento', '$guarnicao', '$salada', '$sobremesa', '$valorRefeicao', $opiniaoValorRefeicao, '$tempoFila', '$sugestao', '$dataAtual')");
    unset($_SESSION['nomeUsuario']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location: pages/confirmacaoAvaliacao.php');   
}
?>