<?php 
    $aluno; [

        'nome' => 'joão',
        'idade'=> 18,
        'cidade'=> 'marilia',
      
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
            if($aluno['ativo']){
                echo"Nome: $aluno[nome] Idade: $aluno[idade] cidade: [$aluno]";
            }
            ?>
        </body>
<html>
    
    