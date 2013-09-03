<div class="g_inews">
    <div class="bloco">
        <ul>
            <?php

                $sql = "SELECT * FROM " . $prefixo_db . "noticia WHERE ativa = 1";
                $query = mysql_query($sql);
            
                while ($news = mysql_fetch_assoc($query)) {
                        echo "<li><span>" . $news['titulo'] . "</span></li>";
                }            

            ?>
        </ul>
    </div>
</div>