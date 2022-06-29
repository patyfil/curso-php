<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
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

      * {
          margin: 0;
          padding: 0;
          font-family: 'Ubuntu', sans-serif;
      }

      #interface {
          display: flex;
          flex-direction: row;
      }

      #logo {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 50%;
          height: 100vh;
          background-color: #23404D;
      }

      h1 {
          font-size: 4.5em;
          color: white;
      }

      #areaLogin {
          display: flex;
          align-items: center;
          justify-content: center;
          background: linear-gradient(to left, var(--fundo-claro), var(--fundo-escuro));
          width: 50%;
          height: 100vh;
      }

      #boxLogin {
          border-radius: 25px;
          width: 50%;
          height: 330px;
          background: white;
      }

      #areaCampos {
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
      }

      .campos {
          width: 75%;
          height: 45px;
          margin: 20px auto;
          outline: none;
          border: none;
          font-size: 20px;
          color: var(--font-azulEsc);
      }

      ::-webkit-input-placeholder {
          color: var(--font-azulEsc);
      }

      .campos {
          border-bottom: var(--font-azulEsc) 1.5px solid;
      }

      #manterConectado {
          display: flex;
          flex-direction: row;
          justify-content: left;
          width: 75%;
      }

      #manterConectado label {
          color: var(--font-azulEsc);
      }

      #botao {
          width: 75%;
          height: 45px;
          margin: 20px auto;
          outline: none;
          border: none;
          font-size: 20px;
          color: white;
          border-radius: 15px;
          background-color: var(--botao);
      }

      #botao:hover {
          background-color: var(--hover-color);
          cursor: pointer;
      }

      p {
          color: var(--font-azulEsc);
      }

      a {
          color: var(--font-azulEsc);
          text-decoration: none;
      }

      a:hover {
          color: var(--hover-color);
          text-decoration: underline;
      }

      @media (max-width: 950px) {
          #interface {
              flex-direction: column;
          }

          #logo {
              width: 100%;
              height: auto;
              padding-top: 5em;
          }

          #areaLogin {
              background:  linear-gradient(to top, var(--fundo-claro), var(--fundo-escuro));
              width: 100%;
              height: 85vh;
          }
      }

      @media (max-width: 600px) {
          #boxLogin {
              width: 85%;
              height: 370px;
          }
      }

      @media (max-width: 450px) {
          h1 {
              font-size: 3.5em;
          }
      }

      @media (max-width: 350px) {
          h1 {
              font-size: 2.5em;
          }
      }

  </style>
</head>
<body>
  <a href="home.php">Voltar</a>
    <div id="interface">
        <div id="logo">
            <h1>Rede Social</h1>
        </div>
        <div id="areaLogin">
            <div id="boxLogin">
                <form action="validar.php" method="POST">
                    <div id="areaCampos">
                        <!-- <input class="campos" type="text" name="nome" placeholder="Nome do Usuário"> -->
                        <input class="campos" type="email" name="email" size="25" placeholder="e-mail">
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
    </div>
</body>
</html>


