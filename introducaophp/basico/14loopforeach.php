<?php 
    $cidades=['- São paulo','- Rio de janeiro','- Marilia','- Bauru','-Gália'];
?>
<!DOCTYPE html>
<html lang = "pt-br">
    
        <head>
            <meta charset="UTF-8">
            <title>foreachCidade</title>
        </head>

        <body>
           <?php
           
             foreach($cidades as $cidade){
                echo "$cidade<br>";
             } 
            
            ?>
        </body>
<html>
    
    