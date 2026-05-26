<?php 
    $n1= 0;
    $n2=0;
    $n3=6;
    $media=($n1 + $n2 +$n3 * 3);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_media</title>
</head>
<body>
    <?php 

    if($media >= 7.0){
        echo"Aprovado!!";
    }elseif($media >=5.0){
        echo"Em Recuperção!!";

     }else{
        echo"Reprovado!!";
      }
    
    ?>
    
</body>
</html>