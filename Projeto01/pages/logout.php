<?php
if(!isset($_SESSION)){
    session_start();
}
session_destroy(); //destroi as variaveis. //deixa de salvar.


header("Location: login.php");
?>
