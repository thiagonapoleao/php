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

if ($idade >= 6  && $idade <= 12) {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'infantil')
          // echo "O nadador " . $nome . " compete na catecoria infatil";   --  para quando for aparecerum outra pagina a mensagem
          $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na catecoria infatil";      
          header( 'Location: index.php');
          return;
        }   
} else if ($idade >= 13  && $idade <= 18) {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'adolecente')
            //echo "O nadador " . $nome . " compete na catecoria adolecente"; --  para quando for aparecer um outra pagina a mensagem
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na catecoria adolecente";
            header( 'Location: index.php');
            return;
    }   
} else {
    for ($i = 0; $i <= count($catecorias); $i++) {
        if ($catecorias[$i] == 'adulto')
            //echo "O nadador " . $nome . " compete na catecoria adulto"; --  para quando for aparecer um outra pagina a mensagem
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na catecoria adulto";
            header('Location: index.php');
            return;
    }    
}
?>