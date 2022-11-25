<?php
//iniciar a sessão
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){
    die("Você deve estar logado para acessar o painel!<p><a href=\"login.php\">Logar</a></p");
}

?>
