<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Teste de conexão com o banco de dados</h1>
    <?php
    require "dao/conexao.php";
    try {

        $conexao = Conexao::getConnection();
        echo "<h2>Conexão realizada com sucesso!</h2>";

        // para testar a função clone do arquivo conexao.php linha 31
        // $conexao2 = $conexao->clone();

    } catch (\Throwable $e) {
        echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
     } 
    ?>
</body>

</html>