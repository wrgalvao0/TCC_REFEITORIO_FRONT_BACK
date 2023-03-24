<?php
$dbHost = 'Localhost';
$dbNomeUsuario = 'root';
$dbSenha = '';
$dbNome = 'formulario_tcc';

$conexao = new mysqli($dbHost, $dbNomeUsuario, $dbSenha, $dbNome);

//verifica se a conexão foi efetuada com sucesso
if($conexao->connect_errno)
{
    echo "ERRO";
}
else
{
    //echo "CONEXAO COM BANCO DE DADOS EFETUADA COM SUCESSO <br>";
}
?>