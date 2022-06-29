<?php

$email=$_POST["email"];
$senha=$_POST["senha"];

if (($email == "email@gmail.com") && ($senha == "123")){

    // header("location:home.php");
    //   exit();
    echo '<script>window.location="home.php";</script>';

    }else{
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuario ou Senha inválidos!'); window.location='login.php'</script>";
    } 
?>