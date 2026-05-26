<?php 

    if(isset($_GET["cep"])){
    $cep = $_GET["cep"];//aqui estou pegando o valor colocado no HTML interface

    $url="https://viacep.com.br/ws/$cep/json"; //aqui eu estou pegando a url da API via cep

    $resposta=file_get_contents($url);//essa parte do meu cod, eu peço uma requisição da api.
    //meu php acessa a URL pega o conteuo etornado e a resposta vem em json

    $dados =json_decode($resposta,true);

    echo $dados["logadouro"];
    echo "<br>";

    echo $dados["bairro:"];
    echo "<br>";

    echo $dados["localidade:"];
    echo "<br>";

    echo $dados["UF:"];
    
    }else{
        echo "Digiite um CEP";
    }
    

    //observação iportante para eu não esquecer:  $_GET é um array usado para receber dados da URL.
?>

