<?php 
    $lojinha=[

        'nome' => 'lojateste',
        'preco'=> 18.00,
        'estoque'=> '10',
        
    ];
?>
<!DOCTYPE html>
<html lang = "pt-br">
    
        <head>
            <meta charset="UTF-8">
            <title>ArrayCores</title>
        </head>

        <body>
           <?php
                echo "Nome: ", $lojinha['nome'], "<br>";
                echo "Preço: ", $lojinha['preco'], "<br>";
                echo "Estoque: ", $lojinha['estoque'];
           
            
            
            ?>
        </body>
<html>
    
    