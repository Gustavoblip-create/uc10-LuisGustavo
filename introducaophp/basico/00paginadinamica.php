<!DOCTYPE html>
<html lang = "pt-br">
    
        <head>
            <meta charset="UTF-8">
            <title>Curso de PHP</title>
        </head>
        <body>
            <p>
                <?php 
                    $teste=1;
                    $litros='1000L';
                    echo '<p>A caixa d\'agua esta vazia.\\ $teste'; 
                    echo '<p>A caixa d\'agua esta vazia.\\ '.$teste;
                    //aspas duplas são  processadas. Por isso permite mais recursos 
                    echo "<br>A caixa d' agua é de $litros"
                ?>
                
               
            </p>
        </body>
    
<html>
    
    