<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<hmtl lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Formulario de Inscrição</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <h2>Formulario para inscrição de competidores</h2>

        <form method="post" action="script.php">
            <?php
            $mensagemDeSucesso = obterMensagemSucesso();
            if (!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }

            $mensagemDeErro = obterMensagemErro();
            if (!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
            ?>
            <p>Seu nome: <input type="text" name="nome" /></p>
            <p>Sua idade: <input type="text" name="idade" /></p>
            <p><input type="submit" value="Enviar Dados do Competidor" /></p>
        </form>

    </body>

</hmtl>