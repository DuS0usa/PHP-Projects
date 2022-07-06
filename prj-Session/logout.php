<?php
    session_start();
    unset($_SESSION['lgnSession']);
    unset($_SESSION['snhSession']);
    session_destroy();

    header("Location: index.php");

    // Código para sair da Sessão quando o usuário clicar no botão "Sair"
?>