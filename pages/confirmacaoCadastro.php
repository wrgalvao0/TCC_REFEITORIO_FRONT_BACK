<?php
if(isset($_POST['botaoLogin']))
{
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/confirmacaoCadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFIRMAÇÃO DE CADASTRO</title>
</head>
<body>
    <div>
        <form action="confirmacaoCadastro.php" method="POST">
            <img src="../img/check2.png" alt="imagem de confirmacao">
            <h3>CADASTRO EFETUADO COM SUCESSO !</h3>
            <input type="submit" name="botaoLogin" value="LOGIN">
        </form>
    </div>
</body>
</html>