<?php
session_start();
?>
<!DOCTYPE html>
<hmtl lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Formulario de Inscrição</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device.width, initial-scale=1">
    </head>

    <body>

        <h2>Formulario para inscrição de competidores</h2>

        <form method="post" action="script.php">
        <?php
          $mensagemDeSucesso = isset($_SSESION['mensagem-de-sucesso']) ? $_SSESION['mensagem-de-sucesso'] : '';
          if(!empty($mensagemDeSucesso)){
              echo $mensagemDeSucesso;
          }

          $mensagemDeErro = isset($_SSESION['mensagem-de-erro']) ? $_SSESION['mensagem-de-erro'] : '';
          if(!empty($mensagemDeErro)){
              echo $mensagemDeErro;
          }
        ?>
            <p>Seu nome: <input type="text" name="nome" /></p>
            <p>Sua idade: <input type="number" name="idade" /></p>
            <p><input type="submit" value="Enviar Dados do Competidor" /></p>
        </form>

    </body>

</hmtl>

