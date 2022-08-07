<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>WeCode :: Login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="css/login.css" type="text/css" />
	<!-- ícones  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<script src="https://kit.fontawesome.com/7ae77fe78b.js" crossorigin="anonymous"></script>
	<!--  fontes  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>

	<section id="interface">
		<div id="logo">
			<img src="img/fundo.png" alt="" />
		</div>
		<div id="areaLogin">
			<h1>WeCode</h1>
			<div id="boxLogin">
				<!-- Aqui temos o formulário-->
				<form action="autenticador.php" method="POST">
					<div id="areaCampos">
						<input class="campos" type="text" name="login" size="25" placeholder="Usuário (e-mail ou nick)">
						<input class="campos" type="password" name="senha" size="15" placeholder="Senha">
						<div id="manterConectado">
							<input type="checkbox" id="conectado">&nbsp;
							<label for="conectado">Manter conectado</label>
						</div>
						<input type="submit" name="submit" value="Entrar" id="botao">
						<p>É novo aqui?<a href="formulario.php"> Criar conta</a></p>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>

</html>