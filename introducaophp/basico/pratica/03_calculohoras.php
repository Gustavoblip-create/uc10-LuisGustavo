
<?php 
    
    $he= new DateTime("08:00");//entrada
    $hs=new DateTime("17:00");//saida
    $ht= $he->diff($hs);//hora totoal

    //Observação DIFF , calcula diferença de horas
    //$ht = $he->diff($hs); significa -->“qual a diferença entre 08:00 e 17:00?”

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_calculohoras.php</title>
</head>
<body>
    <?php 
        echo"O total de horas trabalhadas é de:<br>";
        echo $ht->h. "horas e ";  echo $ht->i. "minutos";
        // echo $ht->i. "minutos"
 
    
    ?>
    
</body>
</html>