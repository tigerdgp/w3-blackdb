<nav>
    <form action="" name="formBusca">
    <input type="search" name="busca" placeholder="Pesquisar" autocomplete="on">
</form>
    
<?php
            
    $query = mysql_query("SELECT * FROM " . $prefixo_db . "menu ORDER BY pai");
    while($row = mysql_fetch_object($query))
    {
            $menuItens[$row->pai][$row->id]= array('link'=> $row->link,'name'=> $row->nome);
    }
    imprimeMenuInfinito($menuItens);

?>
    <!--<ul>
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
    </ul>-->
</nav>
