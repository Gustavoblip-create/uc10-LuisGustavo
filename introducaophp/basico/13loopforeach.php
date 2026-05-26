<?php 
    $nomes=['Ana','Carlos','Maria'];
?>
<!DOCTYPE html>
<html lang = "pt-br">
    
        <head>
            <meta charset="UTF-8">
            <title>loopforeach</title>
        </head>

        <body>
           <?php
            echo"usando foreach<br>";
             foreach($nomes as $nome){
                echo "$nome<br>";
             }
             
             echo"--------------------------------------<br>";
             echo"usando for<br>";
             for($i=0; $i  < count($nomes); $i++){
                echo"$nomes[$i]<br>";
             }

            ?>
        </body>
<html>
    
    