<?php
session_start(); //Inicia a sessão, pega a sessão que já foi iniciada.
session_unset(); //Exclui apenas as variáveis ​​da sessão se a sessão ainda existe.
session_destroy(); /* Destrói todos os dados associados à sessão atual. 
Ele não remove a definição de nenhuma das variáveis ​​globais associadas à sessão, 
nem remove a definição do cookie da sessão.*/
echo "<script language=javascript>alert('Você saiu do sistema!');</script>";
//Redireciona para a página de login:
echo "<script language=javascript>window.location.replace('index.php');</script>";


// <?php
// if (isset($_GET["acao"])) {
//     if ($_GET["acao"] == "sair") {
//         session_start(); //Inicia a sessão, pega a sessão que já foi iniciada.
//         session_unset(); //Exclui apenas as variáveis ​​da sessão se a sessão ainda existe.
//         session_destroy(); /* Destrói todos os dados associados à sessão atual. 
// Ele não remove a definição de nenhuma das variáveis ​​globais associadas à sessão, 
// nem remove a definição do cookie da sessão.*/
//         echo "<script language=javascript>alert('Você saiu do sistema!');</script>";
//         //Redireciona para a página de login:
//         echo "<script language=javascript>window.location.replace('index.php');</script>";
//         // header("Location: login.php");
//     }
// }
