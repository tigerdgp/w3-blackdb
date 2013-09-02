<nav>
    <form action="" name="formBusca">
    <input type="search" name="busca" placeholder="Pesquisar" autocomplete="on">
</form>
    <ul id="g_menu">
        <?php

            $menu_query = mysql_query("SELECT * FROM " . $prefixo_db . "menu WHERE ativo = 1 AND pai = 1");
            
            while ($menu = mysql_fetch_assoc($menu_query)) {
                if ($menu['submenu'] == 1) {
                    echo "<li><span>" . $menu['nome'] . " <img src='Temas/tema1/img/down.png' alt='Down'/></span>";
                        echo "<ul>";
                            $submenu_query = mysql_query("SELECT * FROM " . $prefixo_db . "menu WHERE filho = " . $menu['id']);
                            while ($menu1 = mysql_fetch_assoc($submenu_query)) {
                                if ($menu1['pai'] == 2) {
                                    echo "<li><span>" . $menu1['nome'] . "<img src='Temas/tema1/img/right.png' alt='Right'/></span>";
                                        echo "<ul>";
                                        $submenu2_query = mysql_query("SELECT * FROM " . $prefixo_db . "menu WHERE filho = " . $menu1['id']);
                                        while ($menu2 = mysql_fetch_assoc($submenu2_query)) {
                                            echo "<li><span>" . $menu2['nome'] . "</span></li>";
                                        }
                                        echo "</ul>";
                                    echo "</li>";
                                }
                                else {
                                    echo "<li><span>" . $menu1['nome'] . "</span></li>";
                                }
                            }
                        echo "</ul>";
                    echo "</li>";
                }
                else {
                    echo "<li><span>" . $menu['nome'] . "</span></li>";
                }
            }            

        ?>
        <li><span>Database </span>
            <ul>
                <li><span>Items <img src="Temas/tema1/img/right.png" alt="Right"/></span>
                    <ul>
                        <li><a href="#"><span>Dwarf</span></a></li>
                        <li><a href="#"><span>Elf</span></a></li>
                        <li><a href="#"><span>Giant</span></a></li>
                        <li><a href="#"><span>Hobbit</span></a></li>
                        <li><a href="#"><span>Human</span></a></li>
                    </ul>
                </li>
                <li><span>Missões <img src="Temas/tema1/img/right.png" alt="Right"/></span>
                    <ul>
                        <li><a href="#"><span>Beast</span></a></li>
                        <li><a href="#"><span>Blader</span></a></li>
                        <li><a href="#"><span>Fighter</span></a></li>
                        <li><a href="#"><span>Ranger</span></a></li>
                        <li><a href="#"><span>Sorceress / Wizard</span></a></li>
                        <li><a href="#"><span>Tamer</span></a></li>
                    </ul>
                </li>
                <li><span>Habilidades <img src="Temas/tema1/img/right.png" alt="Right"/></span>
                    <ul>
                        <li><a href="#"><span>Balenos</span></a></li>
                        <li><a href="#"><span>Calpheon</span></a></li>
                        <li><a href="#"><span>Serendia</span></a></li>                        
                        <li><a href="#"><span>Valencia</span></a></li>
                    </ul>
                </li>
                <li><span>Áreas <img src="Temas/tema1/img/right.png" alt="Right"/></span>
                    <ul>
                        <li><a href="#"><span>Balenos</span></a></li>
                        <li><a href="#"><span>Calpheon</span></a></li>
                        <li><a href="#"><span>Serendia</span></a></li>                        
                        <li><a href="#"><span>Valencia</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><span>Utilitários <img src="Temas/tema1/img/down.png" alt="Down"/></span>
            <ul>
                <li><a href="/balenospub/galeria/artes"><span>Artes</span></a></li>                                                
                <li><a href="/balenospub/galeria/screenshots"><span>Screenshots</span></a></li>                
                <li><a href="/balenospub/galeria/videos"><span>Vídeos</span></a></li>
                <li><a href="/balenospub/galeria/wallpapers"><span>Wallpapers</span></a></li>
            </ul>
        </li>
        <li><span>Comunidade <img src="Temas/tema1/img/down.png" alt="Down"/></span>
            <ul>
                <li><a href="#"><span>Database</span></a></li>
                <li><a href="#"><span>Fórum</span></a></li>
            </ul>
        </li>
        <li><a href="#"><span>Guias</span></a></li>
    </ul>
</nav>
