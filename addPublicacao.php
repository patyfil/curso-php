<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

try {
$publicacao = new Publicacao($obj);
$dao = new PublicacaoDao;

//desafio: realizar o tratamentos verificando a existencia do valor
//desafio 2: usar DTO
$publicacao->setAutor($_POST["nome"]);
$publicacao->setTexto($_POST["texto"]);
$publicacao->setCurtida($_POST["curtida"]);
$publicacao->setData($_POST[""]);


if ($publicacao == "" || $foto == "") {
echo "<script language=javascript>
    alert('Por favor, preencha todos os campos!');
</script>";
echo "<script language=javascript>
    window.location.replace('login.php');
</script>";
}

$publicacao->setTexto($_POST["texto"]);

$foto = uploadFotos($_FILES["file"]);
$publicacao->setFoto($foto);

$dao->salvar($publicacao);

// echo "Usuário cadastrado com sucesso!";
echo "<script language=javascript>
    alert('Publicação postada com sucesso!');
</script>";
echo "<script language=javascript>
    window.location.replace('index2.php');
</script>";
} catch (\Throwable $th) {
echo "Erro: " . $th->getMessage();
}
}