<nav>
    <form action="" name="formBusca">
        <input type="search" name="busca" placeholder="Pesquisar" autocomplete="on" class="search">
    </form>
    
    <?php
            
        $query = mysql_query("SELECT * FROM " . $prefixo_db . "menu ORDER BY pai");
        while($row = mysql_fetch_object($query))
        {
                $menuItens[$row->pai][$row->id]= array('link'=> $row->link,'name'=> $row->nome);
        }
        imprimeMenuInfinito($menuItens);

    ?>
</nav>
