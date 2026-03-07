<?php 

        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'escola_luis';

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);
   
    if($conexao ->connect_error) {
    die('erro de conexão');
}

    $sql = "SELECT id,nome, idade, uf, cidade FROM  alunos";
    $resultado = $conexao->query($sql);

     if($resultado->num_rows > 0){

     //ANOTAÇÔES <td> = table data(uma coluna dentro da linha)
                //<tr> = linha de tabela, a cada <tr> que eu colocar tera uma linha
               //<th> = eu uso para fazer um cabeçalho na tabla 
               //resumidão <table>tabela, <tr>linha, <td>coluna, <th>titulo
        echo"<table border='1'>";
        echo"<tr>
                <tr>ID<tr>
                <tr>Nome<tr>
                <tr>Idade<tr>
                <tr>UF<tr>
                <tr>cidade<tr>
                <tr/>";


    while ($linha = $resultado->fetch_assoc()) {

//ANOTAÇÃO: 
            echo"<tr>";
            echo "<td>{$linha['id']}</td>";
            echo "<td>{$linha['nome']}</td>";
            echo "<td>Idade: {$linha['idade']}</td>";
            echo "<td>{$linha['uf']} </td>";
            echo "<td>{$linha['cidade']}</td>";
            echo "</tr>";
    }

    echo"</table>";

}
?>