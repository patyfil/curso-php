<?php
session_start();

$user1 = 'patricia';
$pass1 = '123';
$nome1 = "Patrícia de Souza";

$user2 = 'rodrigo';
$pass2 = '123';
$nome2 = "Rodrigo Cezario da Silva";

$user3 = 'savana';
$pass3 = '123';
$nome3 = "Savana Tezza";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo "processando login...";
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
    if ($user == "" || $pass == "") {
        echo "<script language=javascript>alert('Por favor, preencha todos os campos!');</script>";
        echo "<script language=javascript>window.location.replace('login.php');</script>";
    }

    if (($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2) || ($user == $user3 && $pass == $pass3)
    ) {
        //sucesso!
        $_SESSION["usuario_logado"] = $user;
        //redirecionar
        header("Location: index.php");
    }/* Se o usuario ou a senha não batem alertamos o usuário */ else {
        echo "<script language=javascript>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
        echo "<script language=javascript>window.location.replace('login.php');</script>";
    }
}
