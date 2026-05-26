<?php 
    $nome='luis' ;
    $dataNascimento=new DateTime("13-10-2000");
    $hoje = new DateTime(); //data de hoje
    $curso= 'desenvolviemnto de sistema';
    //diff é diferença
    //->y seleciono o ano
    $idade= $hoje->diff($dataNascimento)  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Idade</title>
</head>
<body>
        <?php 
        echo"Nome: $nome<br>";
        echo"Idade: " . $idade->y . "anos ".$idade->m . "meses e " . $idade->d . "dias<br> ";
        echo "Curso: $curso";

        ?>
    
</body>
</html>