<?php
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if(($login == 'adm') && ($senha == '123456')){
        session_start();
        $_SESSION['lgnSession'] = $login;
        $_SESSION['snhSession'] = $senha;    
        header("Location: area-restrita/index-area-restrita.php");

        // Liberando a entrada do Usuário ao arquivo restrito

    } else{
        header("Location: index.php");

        // Se as informações não coincidirem, ele volta pra tela de Login.
    }











?>