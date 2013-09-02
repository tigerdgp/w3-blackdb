<?php
    
    //Conectando ao banco de dados
    $db_conn = mysql_connect($ip_db, $usuario_db, $senha_db);
    if (!$db_conn) {
        die ('Nao foi possivel conectar: ' . mysql_error());
    }
    $db_select = mysql_select_db($banco_db, $db_conn);
    if (!$db_select) {

        //Cria o banco de dados se o mesmo ainda nao existir
        if (mysql_query("CREATE DATABASE $banco_db", $db_conn)) {

            mysql_select_db($banco_db) or die(mysql_error());	        

            echo "O banco de dados $banco_db foi criado\n";
        } else {
            die ('Erro ao criar o banco de dados: ' . mysql_error());
        }

    }

?>