<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>WeCode :: Login</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="css/login.css" type="text/css" />
	<!-- ícones  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<script src="https://kit.fontawesome.com/7ae77fe78b.js" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<div id="interface">
		<div id="logo">
			<img src="img/fundo.png" alt="" />
		</div>
		<div id="areaLogin">
			<h1>WeCode</h1>
			<div id="boxLogin">
				<!-- Aqui temos o formulário-->
				<form action="autenticador.php" method="POST">
					<div id="areaCampos">
						<input class="campos" type="user" name="user" size="25" placeholder="Usuário">
						<input class="campos" type="password" name="pass" size="15" placeholder="Senha">
						<div id="manterConectado">
							<input type="checkbox" id="conectado">&nbsp;
							<label for="conectado">Manter conectado</label>
						</div>
						<input type="submit" name="submit" value="Entrar" id="botao">
						<p>É novo aqui?<a href="formulario.html"> Criar conta</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>