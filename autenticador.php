   <?php
    session_start();

    require_once "configuracoes.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //echo "Processando o formulário com post!";
        if (isset($_POST["user"]) && isset($_POST["pass"])) {
            //processar meu login
            $login = $_POST["user"];
            $senha = $_POST["pass"];

            /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
            if ($login == "" || $senha == "") {
                echo "<script language=javascript>alert('Por favor, preencha todos os campos!');</script>";
                echo "<script language=javascript>window.location.replace('login.php');</script>";
            }

            try {
                $dao = new PessoaDao();

                $dto = new LoginDto($login, $senha);

                $pessoa = $dao->logar($dto);

                $_SESSION["usuario_logado"] = serialize($pessoa);
                header("Location: index.php");
            } catch (\Throwable $th) {
                echo $th->getMessage();
                // echo "Erro: " . $th->getMessage();
                /* Se o usuario ou a senha não batem alertamos o usuário e voltamos para a página de login.php */
                echo "<script language=javascript>window.location.replace('login.php');</script>";
            }
        }
    }
    ?>