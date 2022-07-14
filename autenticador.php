<?php
/* Declaração de Variáveis */
$user = @$_POST['user'];
$pass = @$_POST['pass'];
$submit = @$_POST['submit'];
$nome = @$_POST['nome'];


/* Declaração das variáveis que possuem os usuarios e as senhas */
$user1 = 'douglas';
$pass1 = '123';
$nome1 = "Douglas Carvalho";

$user2 = 'maikel';
$pass2 = '123';
$nome2 = "Maikel Morales";

$user3 = 'patyfil';
$pass3 = '123';
$nome3 = "Patrícia de Souza";

$user4 = 'rodrigo';
$pass4 = '123';
$nome4 = "Rodrigo Cezario da Silva";

$user5 = 'savana';
$pass5 = '123';
$nome5 = "Savana Tezza";


session_start();
/* Testa se o botão submit foi ativado */
if ($submit) {
    /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
    if ($user == "" || $pass == "") {
        echo "<script language=javascript>alert('Por favor, preencha todos os campos!');</script>";
        echo "<script language=javascript>window.location.replace('index.php');</script>";
    }
    /* Caso o campo usuario e senha não 
            *estejam vazios vamos testar se o usuário e a senha batem 
        *iniciamos uma sessão e redirecionamos o usuário para o painel */ else {
        if (($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)
            || ($user == $user3 && $pass == $pass3) || ($user == $user4 && $pass == $pass4)
            || ($user == $user5 && $pass == $pass5)
        ) {
            session_start();
            $_SESSION['usuario_logado'] = $user;
            header("Location: index.php");
        }
        /* Se o usuario ou a senha não batem alertamos o usuario */ else {
            echo "<script language=javascript>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
            echo "<script language=javascript>window.location.replace('login.php');</script>";
        }
    }
}
