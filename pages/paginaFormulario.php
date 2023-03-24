<?php
session_start();
//print_r($_SESSION);
if(!isset($_SESSION['nomeUsuario']))
{
  header('Location: ../index.php');
}
//include_once('../formulario.php');
//echo session_id();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="shortcut icon" href="IMAGENS/logo unifesspa_transparente.svg" type="image/x-icon">
  <link rel="stylesheet" href="../css/formulario.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Formulário de Avaliação</title>
</head>

<body>
  <header class="cabecalho">
    <img id="logoUnifesspa" src="../img/LOGO UNIFESSPA.png" alt="logo Unifesspa">
    <h3>AVALIE NOSSO REFEITÓRIO</h3>
  </header>
<form action="../formulario.php" method="POST">
<div>
  <div class="columns is-mobile is-centered">
    <div id="coluna-1" class="column is-narrow">
      <p class="tituloInputRadio">PRATO PRINCIPAL</p>
      <div class="container-opcoes columns is-mobile">
        <div class="container-opcao column is-narrow">
            <input type="radio" name="inputRadioPratoPrincipal" id="inputRuimPratoPrincipal" value="RUIM" class="inputRadio" required>
            <label class="labelInputRadio" for="inputRuimPratoPrincipal">RUIM</label>
          <!--<label class="labelInputRadio" for="inputRuimPratoPrincipal">RUIM</label>-->
        </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularPratoPrincipal" name="inputRadioPratoPrincipal"  value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularPratoPrincipal">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomPratoPrincipal" name="inputRadioPratoPrincipal" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomPratoPrincipal">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelentePratoPrincipal" name="inputRadioPratoPrincipal" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelentePratoPrincipal">EXCELENTE</label>
      </div>

    </div>

    <p class="tituloInputRadio">ACOMPANHAMENTO</p>
    <div class="container-opcoes columns is-mobile">

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRuimAcompanhamento" name="inputRadioAcompanhamento" value="RUIM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRuimAcompanhamento">RUIM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularAcompanhamento" name="inputRadioAcompanhamento" value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularAcompanhamento">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomAcompanhamento" name="inputRadioAcompanhamento" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomAcompanhamento">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelenteAcompanhamento" name="inputRadioAcompanhamento" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelenteAcompanhamento">EXCELENTE</label>
      </div>

    </div>

    <p class="tituloInputRadio">GUARNIÇÃO</p>
    <div class="container-opcoes columns is-mobile">

      <div class="container-opcao column is-narrow">
        <input type="radio" name="inputRadioGuarnicao" id="inputRuimGuarnicao" class="inputRadio" value="RUIM" required>
        <label class="labelInputRadio" for="inputRuimGuarnicao">RUIM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularGuarnicao" name="inputRadioGuarnicao" value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularGuarnicao">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomGuarnicao" name="inputRadioGuarnicao" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomGuarnicao">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelenteGuarnicao" name="inputRadioGuarnicao" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelenteGuarnicao">EXCELENTE</label>
      </div>

    </div>

    <p class="tituloInputRadio">SALADA</p>
    <div class="container-opcoes columns is-mobile">

      <div class="container-opcao column is-narrow">
        <input type="radio" name="inputRadioSalada" id="inputRuimSalada" value="RUIM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRuimSalada">RUIM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularSalada" name="inputRadioSalada" value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularSalada">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomSalada" name="inputRadioSalada" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomSalada">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelenteSalada" name="inputRadioSalada" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelenteSalada">EXCELENTE</label>
      </div>

    </div>

    <p class="tituloInputRadio">SOBREMESA</p>
    <div class="container-opcoes columns is-mobile">
      <div class="container-opcao column is-narrow">
        <input type="radio" name="inputRadioSobremesa" id="inputRuimSobremesa" class="inputRadio" value="RUIM" required>
        <label class="labelInputRadio" for="inputRuimSobremesa">RUIM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularSobremesa" name="inputRadioSobremesa" value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularSobremesa">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomSobremesa" name="inputRadioSobremesa" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomSobremesa">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelenteSobremesa" name="inputRadioSobremesa" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelenteSobremesa">EXCELENTE</label>
      </div>

    </div>

  </div>
  <div id="coluna-2" class="column is-narrow">
    <p class="tituloInputRadio">DIGA-NOS O QUE VOCÊ ACHOU DO <br> VALOR DA REFEIÇÃO</p>
    <div class="container-opcoes columns is-mobile">

      <div class="container-opcao column is-narrow">
        <input type="radio" name="inputRadioValorRefeicao" id="inputRuimValorRefeicao" value="RUIM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRuimValorRefeicao">RUIM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularValorRefeicao" name="inputRadioValorRefeicao" value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularValorRefeicao">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomValorRefeicao" name="inputRadioValorRefeicao" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomValorRefeicao">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelenteValorRefeicao" name="inputRadioValorRefeicao" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelenteValorRefeicao">EXCELENTE</label>
      </div>

    </div>

    <div class="container">
      <p id="titulo-container">QUAL VALOR VOCÊ ACHARIA JUSTO ?</p>
      <input type="number" min="0" max="20" step="any" name="opiniaoValorJustoRefeicao" class="campoTexto">
    </div>

    <p class="tituloInputRadio">TEMPO DE ESPERA NA FILA</p>
    <div class="container-opcoes columns is-mobile">

      <div class="container-opcao column is-narrow">
        <input type="radio" name="inputRadioTempoFila" id="inputRuimTempoFila" value="RUIM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRuimTempoFila">RUIM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputRegularTempoFila" name="inputRadioTempoFila" value="REGULAR" class="inputRadio" required>
        <label class="labelInputRadio" for="inputRegularTempoFila">REGULAR</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputBomTempoFila" name="inputRadioTempoFila" value="BOM" class="inputRadio" required>
        <label class="labelInputRadio" for="inputBomTempoFila">BOM</label>
      </div>

      <div class="container-opcao column is-narrow">
        <input type="radio" id="inputExcelenteTempoFila" name="inputRadioTempoFila" value="EXCELENTE" class="inputRadio" required>
        <label class="labelInputRadio" for="inputExcelenteTempoFila">EXCELENTE</label>
      </div>

    </div>

    <div class="container">
      <p>SUGESTÃO</p>
      <textarea name="campoDeSugestao" id="campoDeSugestao" class="campoTexto"></textarea>

    </div>
  </div>
  <br>
  </div>

</div>
<div class="center">
  <input type="submit" id="submit" name="submit" value="ENVIAR" class="botao">
</div>
</form>
</body>
</html>