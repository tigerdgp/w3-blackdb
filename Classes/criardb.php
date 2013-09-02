<?php    
    
    //Inclui o script de configuracao para acesso ao banco de dados
    include "configuracao.php";

    //Selecionar o banco de dados a ser utilizado
    if ($db_select) {

        //Tabelas a serem inseridas no banco de dados
        $db_table_noticia = $prefixo_db . "noticia";
        $db_table_menu = $prefixo_db . "menu";
        //$table_ = $prefixo_db . "";
        //$table_ = $prefixo_db . "";        

        //Cria as tabelas no banco de dados
        //Cria a tabela Noticia
        $db_table_exists = mysql_query("SELECT 1 FROM $db_table_noticia LIMIT 0", $db_conn);
        if ($db_table_exists){
            echo htmlentities("A tabela $db_table_noticia já existe ou não foi possível ser criada.") . "<br />";
        }
        else {
            mysql_query("CREATE TABLE $db_table_noticia (
	            id INT not null AUTO_INCREMENT,
	            titulo varchar(100) not null,
	            conteudo text not null,
	            autor INT not null,
	            data DATE not null,
                ativa INT not null,
	            PRIMARY KEY(id))")
            Or die(mysql_error());

            echo "A tabela $db_table_noticia foi criada com sucesso!";
        }
        
        //Cria a tabela Menu
        $db_table_exists = mysql_query("SELECT 1 FROM `$db_table_menu` LIMIT 0", $db_conn);
        if ($db_table_exists){
            echo htmlentities("A tabela $db_table_menu já existe ou não foi possível ser criada.") . "<br />";
        }
        else {
            mysql_query("CREATE TABLE $db_table_menu (
	            id INT not null AUTO_INCREMENT,
	            nome varchar(100) not null,
	            link varchar(255) not null,
	            pai INT null,
	            filho INT null,
                ativo INT not null,
	            PRIMARY KEY(id))") 
            Or die(mysql_error());

            echo "A tabela $db_table_menu foi criada com sucesso!";
        }
    }
    else {
        echo "Erro ao criar o banco de dados: " . mysql_error();
    }

?>