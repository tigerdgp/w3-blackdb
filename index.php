<?php
    
    include '/Classes/configuracao.php';
    include '/Classes/modulos.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $TituloSite ?></title>
        <link href="Temas/tema1/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="Temas/tema1/css/global.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <?php 

            include '/Controles/navTop.php';             

        ?>
        <div id="pagina">
            <?php
                
                include '/Estrutura/header.php';
                include '/Controles/menu.php';
                include '/Estrutura/content.php';

            ?>
        </div> 
        <?php include '/Estrutura/footer.php'; ?>  
        
    </body>
</html>
