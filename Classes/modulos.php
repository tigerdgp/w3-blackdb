<?
    function modulos(){
        if(isset($_GET['op'])){
            $op = $_GET['op'];
            $g = chr(92);
            $op = str_replace($g , "", $_GET['op']);
            $op = str_replace("/" , "", $op);
            $op = str_replace("%00" , "\0", $op);
            $op = str_replace("?" , "", $op);
            $op = htmlspecialchars($op);

            if (is_file("modulos/".$op.".php")) {
      	        include("modulos/".$op.".php");
            } 
            else {
		        echo ("<br>$warning_start M&oacute;dulo $op n&atilde;o foi encontrado! $warning_end<br>");
            }
        }
    }

    function modulo_atual(){

        if(isset($_GET['index'])) {
            echo("<a href='index.php'>News</a> &gt; "); 
            news_content($_GET['index']);
        } 
        elseif(!isset($_GET['op'])) {
            echo("<a href='index.php'>News</a>");
        }
        else {
            echo("<a href=index.php?op=".htmlspecialchars($_GET['op']).">"); 
            echo(ucfirst(htmlspecialchars($_GET['op']))); 
            echo("</a>");
        }	
	
        if(isset($_GET['option'])) {		  
            if($_GET['op'] == 'chat' and !isset($_GET['option'])) {
                echo(" &gt; <a href='index.php?op=chat&option=main'>Chat</a>");
            }
            else {
                echo(" &gt; <a href=index.php?op=chat&option=$_GET[option]>"); 
                echo(ucfirst($_GET['option'])); echo("</a>");
            }
        }
    }

?>