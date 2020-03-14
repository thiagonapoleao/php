<?php
//declare('strict_types=1'); para usar para forçar o tipo da variavel

function validaNome(string $nome): bool
{
    if (empty($nome)) {
        setarMensagemErro( $mensagem = 'O nome não pode conter menos que 3 caractres ');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro( $mensagem = 'O nome não pode conter menos que 3 caractres ');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro( $mensagem = 'O nome não pode conter mais que 40 caractres ');
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
        setarMensagemErro( $mensagem = 'Informe a idade do competidor ');
        return false;
    }
    return true;
}
