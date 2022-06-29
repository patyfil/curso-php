    <!--Esta é a página pessoal do usuario-->
<?php
    echo "<header><h1>Seja Bem Vindo(a)!</h1></header>";
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Logado</title>
    <style>
            @import url('https://fonts.googleapis.com/css2? family = Ubuntu: wght @ 500 & display = swap');
        
        :root {
          --hover-color: #A5D9D0;
          --font-black: #000000;
          --font-azulEsc: #23404D;
          --botao: #23404D;
          --fundo-escuro: #23404D;
          --fundo-claro: #A5D9D0;
        }

        body{
            font-family: 'Ubuntu', sans-serif;
            background-image: linear-gradient(to right, var(--fundo-escuro), var(--fundo-claro));
        }

        a {
            color: white;
            font-size: 30px;
        }

        a:hover {
            background-color: var(--hover-color);
            cursor: pointer;
        }

        
    </style>
</head>

<body>
    <a href="login.php">Voltar para o Login</a>

    <center>
        <img src="img/foto.jpg" width="400">
    </center>

</body>

</html>