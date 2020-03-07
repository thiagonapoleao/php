<?php

$catecorias = [];
$catecorias[] = 'infatil';
$catecorias[] = 'adolecente';
$catecorias[] = 'adulto';
print_r($catecorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
var_dump($nome);
var_dump($idade);

if(empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}
if(strlen($nome) < 3){
    echo "O nome não pode ter menos que 3 caracteres";
    return;
}
if(strlen($nome) > 40){
    echo "O nome é muito extenso";
    return;
}
if(!is_numeric($idade)){
    echo "Infomer um numero para idade";
    return;
}


if ($idade >= 6  && $idade <= 12) {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'infantil')
            echo "O nadador " . $nome . " compete na catecoria infatil";
    }
    //echo 'infatil';
} else if ($idade >= 13  && $idade <= 18) {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'adolecente')
            echo "O nadador " . $nome . " compete na catecoria adolecente";
    }
    //echo 'adolecente';
} else {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'adulto')
            echo "O nadador " . $nome . " compete na catecoria adulto";
    }
    //echo 'adulto';
}
