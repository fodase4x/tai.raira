<?php
//criando as variaveis
$usuario = 'root';
$senha = "";
$database = "login";
$host =  "127.0.0.1"; //verifique o nome que esta no seu Heidi

//fazendo a conexao
$mysqli = new mysqli($host, $usuario, $senha, $database );

//verificando se vai dar erro
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);

}
