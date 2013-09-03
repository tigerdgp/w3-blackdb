<?php 
	if(!isset($_GET['op']) && !isset($_GET['index'])) { 
	    include("modulos/index.php");
    }
	elseif(isset($_GET['news'])) {
	    include("modulos/news_full.php");
    }
	elseif(isset($_GET['op'])) {
	    modulos();
    } 
?>