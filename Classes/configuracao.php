<?php
    
    //Definindo os principais dados do site
    $TituloSite = "Baleno's PUB - Black Desert Online Armory"; //Nome do site
    $logo = "Temas/Tema1/img/LogoBalenosPUB.png"; //Endereco do logo do site

    //Setando variaveis para conexao ao banco de dados
    $ip_db = "localhost"; //IP do servidor do banco de dados
    $usuario_db = "root"; //Usuario de acesso ao banco de dados
    $senha_db = "200123"; //Senha de acesso ao banco de dados
    $banco_db = "blackdb"; //Nome do banco de dados
    $prefixo_db = "bdo_"; //Prefixo a ser utilizado junto aos nomes das tabelas no banco de dados

    //Incluindo a string de conexao ao banco de dados
    include "conexao.php";

    //Definindo o time zone
    $ano = date("Y"); //Pega o ano atual

    //Definindo a linguagem local para Português - Brasil
    $lang = "pt_BR";
    $locale = "UTF8";
    setlocale(LC_ALL, "$lang.$locale", "ptb"); 

?>