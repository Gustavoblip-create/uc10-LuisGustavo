
<?php 
    $cidade = [
        //Array Associativo
        "cep"=>"123456",
        "rua"=>"sigismundo nunes de oliveira",
        "bairro"=> "jardim nazareth",
        "uf"=> "SP"


    ]
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_arrayassociativo</title>
</head>
<body>
    <?php 
        echo "CEP :" . $cidade["cep"] . "<br>";
        echo "RUA:". $cidade["rua"]. "<br>";
        echo "BAIRRO: ". $cidade["bairro"]. "<br>";
        echo "UF:" . $cidade["uf"]




    ?>
</body>
</html>