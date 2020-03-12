<?php

session_start();

$catecorias = [];
$catecorias[] = 'infatil';
$catecorias[] = 'adolecente';
$catecorias[] = 'adulto';
print_r($catecorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
var_dump($nome);
var_dump($idade);

if (empty($nome)) {
    $_SESSION['mensgem-de-erro'] = 'O nome não pode ser vazio';
    header(string 'location: index.php');
    return;
} else if (strlen($nome) < 3) {
    $_SESSION['mensgem-de-erro'] = 'O nome não pode conter menos que 3 caractres ';
    header(string 'location: index.php');
    return;
} elseif (strlen($nome) > 40) {
    $_SESSION['mensgem-de-erro'] = 'O nome não pode conter mais que 40 caractres ';
    header(string 'location: index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensgem-de-erro'] = 'Informe a idade do competidor ';
    header(string 'location: index.php');    
    return;
}


if ($idade >= 6  && $idade <= 12) {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'infantil')
          // echo "O nadador " . $nome . " compete na catecoria infatil";   --  para quando for aparecer um outra pagina a mensagem
          $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na catecoria infatil";
          header( string "locatioin: index.php");
          return;
        }   
} else if ($idade >= 13  && $idade <= 18) {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'adolecente')
            //echo "O nadador " . $nome . " compete na catecoria adolecente"; --  para quando for aparecer um outra pagina a mensagem
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na catecoria adolecente";
            header( string "locatioin: index.php");
            return;
    }   
} else {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'adulto')
            //echo "O nadador " . $nome . " compete na catecoria adulto"; --  para quando for aparecer um outra pagina a mensagem
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na catecoria adulto";
            header( string "locatioin: index.php");
            return;
    }    
}
