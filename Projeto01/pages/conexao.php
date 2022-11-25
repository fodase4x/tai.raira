<?php
//variaveis que irão receber os dados 
$mensagem="Preencha o formulario";
$nome="";
$email="";
$msg="";

//verificar se os dados estão chegamdo no BD
//os nomes devem estar iguias ao do banco criado

if(isset($_POST["nome"], $_POST["email"], $_POST["msg"])){

    //iniciando a conexao
    $conexao =new PDO("mysql:host=127.0.0.1;dbname=site1","root","");

    //atribuindo os valores dos inputs para as variáveis
    //o filter_input, limpa os dados depois de inseridos
    $nome= filter_input(INPUT_POST, "name", FILTER_UNSAFE_RAW);
    $email= filter_input(INPUT_POST, "email", FILTER_UNSAFE_RAW);
    $msg= filter_input(INPUT_POST, "msg", FILTER_UNSAFE_RAW);

    //verificar se o usuário digitou dados 
    if(!$nome || !$email || !$msg){
        $mensagem ="Dados Inválidos";
    }else{
        //Vai inserir os dados na tabela l´DO bd
        $stm = $conexao-> prepare('INSERT INTO contato(nome, email,msg) VALUES (:nome, :email, :msg)');
        //bindParam = informar valores dinamicamente para uma requisição
        //SQL usuario PHP, através de uma variárel ou constante.
        $stm->bindParam('nome',$nome);
        $stm->bindParam('email',$email);
        $stm->bindParam('msg',$msg);
        $stm->execute();

        $mensagem ="Mensagem Enviada com Sucesso";

        //limpar campos qnd a msg for enviada
        $nome="";
        $email="";
        $msg="";
    }


}