<div class="g_inews">
    <div class="bloco">

    sad<br />
    <?php

            $menu_sql = "SELECT * FROM " . $prefixo_db . "menu WHERE ativo = 1";
            $menu_query = mysql_query($menu_sql);
            
            echo $menu_sql;

            while ($menu = mysql_fetch_assoc($menu_query)) {
                //if ($menu['pai'] == 1) {
                    echo "<li><span>" . $menu['nome'] . "</span></li>";
                //}
            }            

        ?>
    </div>
</div>