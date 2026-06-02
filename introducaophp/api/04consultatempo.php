<?php 
    $apikey='e81141681f51e607b153bc6da8e07a5b';
    $latitude='-22.2138900';
    $longitude='-49.945830';

   $url = "https://api.openweathermap.org/data/2.5/weather?lat={$latitude}&lon={$longitude}&appid={$apikey}&units=metric&&lang=pt_br";

    $resposta = file_get_contents($url);

    if($resposta !== false){
        $dados = json_decode($resposta, true);

        echo "<pre>";
        print_r($dados);
        echo "</pre>";
    }else{
        echo "Erro ao consultar a API";
    }
?>
<h1>Consulta Meteorológica</h1>

<p>Cidade: <?php echo $dados['name']; ?></p>

<p>Temperatura: <?php echo $dados['main']['temp']; ?> °C</p>

<p>Sensação térmica: <?php echo $dados['main']['feels_like']; ?> °C</p>

<p>Umidade: <?php echo $dados['main']['humidity']; ?>%</p>

<p>Condição: <?php echo $dados['weather'][0]['description']; ?></p>