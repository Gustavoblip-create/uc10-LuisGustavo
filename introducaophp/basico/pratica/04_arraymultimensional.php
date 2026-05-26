<?php 
$cidades = [
    
    ["nome"=>"são Paulo",
    "uf"=>"SP",
    ],
    
    ["nome"=>"rio de janeiro",
    "uf"=>"RJ",
    ],

    ["nome"=> "minas gerais",
    "uf"=>"MG"

    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04_arraymultimensional.php</title>
</head>
<body>
    <?php 
        // para o spassamento ultiliza os pontos junto com uma string isolada, para concatena
        echo $cidades[0]["uf"] . "-" . $cidades [0]["nome"]."<br>";
        echo $cidades[1]["uf"] . "-" . $cidades [0]["nome"]."<br>";
        echo $cidades[2]["uf"] . "-" . $cidades [0]["nome"];
        //obs: primeiro numero representa em qual liha de array eu quero acessar, e depois posso escolher qual parte desse array quero usar, ex: qual coluna , nome,idade,uf,etc...
    
    ?>
    
</body>
</html>