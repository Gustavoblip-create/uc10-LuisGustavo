<?php
//isset ele confere se existe o conteúdo
//$_post receb dados do formularoi
//GET- ele coloca o conteudo na url ,tudo que eu defini

?>



<?php

        if (isset($_POST["nome"])) {



        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $numero = $_POST["numero"];
        $linkedin = $_POST["url"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        $nome_empresa = $_POST["nome_empresa"];
        $mes_entrada = $_POST["mes_entrada"];
        $mes_saida = $_POST["mes_saida"];

        // recebe o que usuairio manda
        //Nome: superglobal de arquivos
        //Função: guarda todos os arquivos enviados pelo formulário
        //["name"]
        //Nome: nome do arquivo
        //Função: pega o nome original do arquivo

        //["tmp_name"]
        //Nome: caminho temporário
        //Função: mostra onde o arquivo está guardado temporariamente no servidor
        //$arquivo_nome
        //Nome: variável
        //Função: guardar o caminho temporário
        //move_uploaded_file()
        //Nome: função do PHP
        //Função: lugar onde o arquivo será salvo
        //(ponto) concatenação aqui do meu cod
        


        $arquivo_nome = $_FILES["file"]["name"];
        $arquivo_tmp = $_FILES["file"]["tmp_name"];

        // mover para pasta uploads
        move_uploaded_file($arquivo_tmp, "uploads/" . $arquivo_nome);
        
        echo "<h2>Dados</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Número: $numero <br>";
        echo "Linkedin: $linkedin <br>";
        echo "Idade: $idade <br>";
        echo "Sexo: $sexo <br>";
        echo "Empresa: $nome_empresa <br>";
        echo "Entrada: $mes_entrada <br>";
        echo "Saída: $mes_saida <br>";
        echo "Arquivo: $arquivo_nome <br><br>";

    //coloca o link voltar
    echo '<a href="02_form.html">Voltar</a>';
} else {
    //incluir o Else, seja falso
    echo "Acesso inválido.";
}

?>





