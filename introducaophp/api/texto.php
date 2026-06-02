
Voltar


Entregar
Não entregue
UC11 - 02 - Consumo de múltiplas APIs
Data de conclusão 8 de junho de 2026 às 19:00
Instruções
Objetivo

Desenvolver uma aplicação web em PHP capaz de integrar múltiplas APIs para obter e exibir informações meteorológicas a partir da seleção de um município brasileiro.

Esta atividade tem como objetivo aplicar os conceitos de consumo de APIs REST, tratamento de dados JSON, integração entre sistemas, versionamento e desenvolvimento de aplicações web.

Desafio

Você deverá desenvolver um sistema que execute o seguinte fluxo:

Consulta API do IBGE
↓
Carrega todos os Municípios do Brasil
↓
Usuário seleciona o Município
↓
Consulta Latitude e Longitude utilizando a API Nominatim (OpenStreetMap)
↓
Consulta a API OpenWeatherMap
↓
Exibe a Previsão do Tempo

Requisitos Funcionais

1. Carregamento dos Municípios

Ao carregar a aplicação:

Consultar a API do IBGE.
Carregar todos os municípios brasileiros em uma lista de seleção (ComboBox).

Endpoint:

https://servicodados.ibge.gov.br/api/v1/localidades/municipios

A lista deverá exibir:

Marília - SP
São Paulo - SP
Rio de Janeiro - RJ
Curitiba - PR

2. Consulta de Coordenadas Geográficas

Após selecionar o município:

Consultar a API Nominatim.
Obter latitude e longitude da cidade selecionada.

Exemplo:

https://nominatim.openstreetmap.org/search?q=Marilia,SP,Brasil&format=json&limit=1

3. Consulta Meteorológica

Utilizar as coordenadas obtidas para consultar a API OpenWeatherMap.

Endpoint:

https://api.openweathermap.org/data/2.5/weather

Parâmetros obrigatórios:

lat
lon
appid
units=metric
lang=pt_br
4. Exibição das Informações

A aplicação deverá exibir no mínimo:

Município
Estado (UF)
Latitude
Longitude
Temperatura atual
Sensação térmica
Umidade do ar
Condição climática
Velocidade do vento

Meu trabalho

Anexo
Carregar deste dispositivo
Nenhum arquivo escolhido
Novo
Pontos
Sem pontos
