<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $catecorias = [];
    $catecorias[] = 'infatil';
    $catecorias[] = 'adolecente';
    $catecorias[] = 'adulto';
    //print_r($catecorias);

    if (validaNome($nome) && validaIdade($idade)) {
        if ($idade >= 6  && $idade <= 12) {
            for ($i = 0; $i <= count($catecorias); $i++) {
                if ($catecorias[$i] == 'infantil')
                    setarMensagemSucesso($mensagem = "O nadador " . $nome . " compete na catecoria infatil");
                return null;
            }
        } else if ($idade >= 13  && $idade <= 18) {
            for ($i = 0; $i <= count($catecorias); $i++) {
                if ($catecorias[$i] == 'adolecente')
                    setarMensagemSucesso($mensagem = "O nadador " . $nome . " compete na catecoria adolecente");
                return null;
            }
        } else {
            for ($i = 0; $i <= count($catecorias); $i++) {
                if ($catecorias[$i] == 'adulto')
                    setarMensagemSucesso($mensagem = "O nadador " . $nome . " compete na catecoria adulto");
                return null;
            }
        }
    } else {
        return obterMensagemErro();
    }
}
