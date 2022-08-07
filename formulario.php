<?php

require_once "configuracoes.php";
require_once "funcoes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  try {
    $pessoa = new Pessoa;
    $dao = new PessoaDao;
    // $dto = new LoginDto($login, $senha);

    //desafio: realizar o tratamentos verificando a existencia do valor
    //desafio 2: usar DTO
    $pessoa->setNome($_POST["nome"]);
    $pessoa->setNick($_POST["nick"]);
    $pessoa->setEmail($_POST["email"]);


    if (!($_POST["senha"] == $_POST["confsenha"])) {
      echo "<script language=javascript>alert('As senhas informadas são diferentes!');</script>";
      throw new Exception("As senhas informadas são diferentes!");
    }
    $pessoa->setSenha($_POST["senha"]);
    //Primeiro cadastrar senha pra depois fazer upload de fotos
    $foto = uploadFotos($_FILES["foto"]);
    $pessoa->setFoto($foto);

    $dao->salvar($pessoa);
    // $dto->getLogin($login);

    // echo "Usuário cadastrado com sucesso!";
    echo "<script language=javascript>alert('Usuário cadastrado com sucesso!');</script>";
    echo "<script language=javascript>window.location.replace('login.php');</script>";
  } catch (\Throwable $th) {
    echo "Erro: " . $th->getMessage();
  }
}
?>
<!-- Formulário para Cadastro de usuários -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/formulario.css" type="text/css" />
  <!--  fontes  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Botão de voltar para a tela de login -->
  <div class="tela">
    <div class="botao"><a href="login.php"><input type="submit" name="submit" value="Voltar" id="botao" /></a></div>
    <!-- Formulário de Cadastro -->
    <div class="box">
      <form action="formulario.php" method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend><b>Cadastro de Usuário</b></legend>
          <br />
          <!-- *********************************** NOME COMPLETO *********************************** -->
          <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required />
            <label for="nome" class="labelInput">Nome Completo:</label>
          </div>
          <br /><br />
          <!-- ******************************* USER - NOME DE USUÁRIO ******************************* -->
          <div class="inputBox">
            <input type="text" name="nick" id="nick" class="inputUser" required />
            <label for="nick" class="labelInput">Nome de Usuário (NickName):</label>
          </div>
          <br /><br />
          <!-- *********************************** EMAIL *********************************** -->
          <div class="inputBox">
            <input type="email" name="email" id="email" class="inputUser" required />
            <label for="email" class="labelInput">e-mail:</label>
          </div>
          <br /><br />
          <!-- *********************************** FOTO *********************************** -->
          <div class="inputBox">
            <div class="labFoto"><label for="foto" class="labFoto">Upload de Foto:</label></div>
            <input type="file" name="foto" id="foto" class="inputUser" accept="image/*" />
          </div>
          <br /><br />
          <!-- *********************************** SENHA *********************************** -->
          <div id="senha1" class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required />
            <label for="senha" class="labelInput">Senha:</label>
          </div>
          <div id="senha2" class="inputBox">
            <input type="password" name="confsenha" id="confsenha" class="inputUser" required />
            <label for="confsenha" class="labelInput">Confirme a Senha:</label>
          </div>
          <br /><br /><br />
          <!-- *********************************** BOTÃO CADASTRAR *********************************** -->
          <input type="submit" value="Cadastrar" name="submit" id="submit" />
        </fieldset>
      </form>
    </div>
  </div>
</body>

</html>