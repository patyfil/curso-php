<?php

require_once "configuracoes.php";
require_once "funcoes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  try {
    $pessoa = new Pessoa;
    $dao = new PessoaDao;

    //desafio: realizar o tratamentos verificando a existencia do valor
    //desafio 2: usar DTO
    $pessoa->setNome($_POST["nome"]);
    $pessoa->setNick($_POST["user"]);
    $pessoa->setEmail($_POST["email"]);
    $pessoa->setFone($_POST["telefone"]);
    $pessoa->setCidade($_POST["cidade"]);
    $pessoa->setEstado($_POST["estado"]);
    $pessoa->setGenero($_POST["genero"]);
    $pessoa->setDataNasc($_POST["data_nascimento"]);

    if (!($_POST["senha"] == $_POST["confsenha"])) {
      throw new Exception("As senhas informadas são diferentes!");
    }
    $pessoa->setSenha($_POST["senha"]);

    $foto = uploadFotos($_FILES["foto"]);
    $pessoa->setFoto($foto);

    $dao->salvar($pessoa);

    // echo "Usuário cadastrado com sucesso!";
    echo "<script language=javascript>alert('Usuário cadastrado com sucesso!');</script>";
    echo "<script language=javascript>window.location.replace('index.php');</script>";
  } catch (\Throwable $th) {
    echo "Erro: " . $th->getMessage();
  }
}

// if (isset($_POST['submit'])) {
//   print_r('<br>');
//   print_r('<br>');
//   print_r('Nome: ' . $_POST['nome']);
//   print_r('<br>');
//   print_r('Nick: ' . $_POST['user']);
//   print_r('<br>');
//   print_r('Email: ' . $_POST['email']);
//   print_r('<br>');
//   print_r('Senha: ' . $_POST['senha']);
//   print_r('<br>');
//   print_r('Telefone: ' . $_POST['telefone']);
//   print_r('<br>');
//   print_r('Sexo: ' . $_POST['genero']);
//   print_r('<br>');
//   print_r('Data de nascimento: ' . $_POST['data_nascimento']);
//   print_r('<br>');
//   print_r('Cidade: ' . $_POST['cidade']);
//   print_r('<br>');
//   print_r('Estado: ' . $_POST['estado']);
//   print_r('<br>');
// }

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
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
  <!-- Botão de voltar para a tela de login -->
  <div class="tela">
    <div class="botao"><a href="login.php"><input type="submit" name="submit" value="Voltar" id="botao" /></a></div>
    <!-- Formulário de Cadastro -->
    <div class="box">
      <form name="cad-usuario" action="formulario.php" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="user" id="user" class="inputUser" required />
            <label for="user" class="labelInput">Nome de Usuário (NickName):</label>
          </div><br />
          <!-- *********************************** FOTO *********************************** -->
          <div class="inputBox">
            <div class="labFoto"><label for="arquivo" class="labFoto">Upload de Foto:</label></div>
            <input type="file" name="foto" id="foto" class="inputUser" accept="image/*" />
          </div>
          <br /><br />
          <!-- *********************************** EMAIL *********************************** -->
          <div class="inputBox">
            <input type="email" name="email" id="email" class="inputUser" required />
            <label for="email" class="labelInput">e-mail:</label>
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
          <!-- *********************************** TELEFONE *********************************** -->
          <div class="inputBox">
            <input type="tel" name="telefone" id="telefone" class="inputUser" onkeypress="$(this).mask('(00) 0000-00009')" required />
            <label for="telefone" class="labelInput">Telefone:</label>
          </div>
          <br /><br />
          <!-- *********************************** CIDADE *********************************** -->
          <div id="city" class="inputBox">
            <input type="text" name="cidade" id="cidade" class="inputUser" required />
            <label for="cidade" class="labelInput">Cidade:</label>
          </div>
          <!-- *********************************** ESTADO *********************************** -->
          <div id="uf" class="inputBox">
            <!-- <input type="text" name="estado" id="estado" class="inputUser" required /> -->
            <label for="estado" class="estado">Estado:</label>
            <select name="estado" id="uf">
              <optgroup label="Região Centro-Oeste">
                <option value="DF">Distrito Federal</option>
                <option value="GO">Goiás</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
              </optgroup>
              <optgroup label="Região Nordeste">
                <option value="AL">Alagoas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="MA">Maranhão</option>
                <option value="PB">Paraíba</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="SE">Sergipe</option>
              </optgroup>
              <optgroup label="Região Norte">
                <option value="AC">Acre</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="PA">Pará</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="TO">Tocantins</option>
              </optgroup>
              <optgroup label="Região Sudeste">
                <option value="ES">Espírito Santo</option>
                <option value="MG">Minas Gerais</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
              </optgroup>
              <optgroup label="Região Sul">
                <option value="PR">Paraná</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="SC" selected>Santa Catarina</option>
              </optgroup>
            </select>
          </div>
          <br /><br />
          <!-- *********************************** DATA DE NASCIMENTO *********************************** -->
          <br />
          <label for="data_nascimento"><b>Data de Nascimento: </b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" />
          <br />
          <!-- *********************************** GÊNERO *********************************** -->
          <p>Sexo:</p>
          <input type="radio" id="feminino" name="genero" value="Feminino" required />
          <label for="feminino">Feminino</label>
          <br />
          <input type="radio" id="masculino" name="genero" value="Masculino" required />
          <label for="masculino">Masculino</label>
          <br />
          <input type="radio" id="outro" name="genero" value="Outro" required />
          <label for="outro">Outro</label>
          <br /><br />
          <!-- *********************************** BOTÃO CADASTRAR *********************************** -->
          <input type="submit" value="Cadastrar" name="submit" id="submit" />
        </fieldset>
      </form>
    </div>
  </div>
</body>

</html>