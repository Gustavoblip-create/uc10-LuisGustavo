<?php 

$url = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios";
$resposta = file_get_contents($url);
$municipios = json_decode($resposta, true);


$municipioSelecionado = $_GET['municipio'] ?? '';


$partes = explode(" - ", $municipioSelecionado);

$cidade = $partes[0] ?? '';
$uf = $partes[1] ?? '';


$urlGeo = "https://nominatim.openstreetmap.org/search?q="
    . urlencode($cidade . "," . $uf . ",Brasil")
    . "&format=json&limit=1";

$respostaGeo = file_get_contents($urlGeo);
$dadosGeo = json_decode($respostaGeo, true);


$lat = $dadosGeo[0]['lat'] ?? '';
$lon = $dadosGeo[0]['lon'] ?? '';


// if ($municipioSelecionado) {
//     echo "<pre>";
//     echo "Município: $municipioSelecionado\n";
//     echo "Cidade: $cidade\n";
//     echo "UF: $uf\n";
//     echo "Latitude: $lat\n";
//     echo "Longitude: $lon\n";
//     echo "</pre>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consulta Tempo Brasil</title>
</head>

<body>

<main>

<form method="GET">

    <label>Município</label><br>

    <select name="municipio">
        <?php foreach ($municipios as $municipio) { ?>

            <option value="<?= $municipio['nome'] ?> - <?= $municipio['microrregiao']['mesorregiao']['UF']['sigla'] ?>">
                <?= $municipio['nome'] ?> - <?= $municipio['microrregiao']['mesorregiao']['UF']['sigla'] ?>
            </option>

        <?php } ?>
    </select>

    <br><br>

    <button type="submit">Consultar</button>

</form>

</main>

</body>
</html>