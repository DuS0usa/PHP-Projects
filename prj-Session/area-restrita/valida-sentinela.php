<?php

    session_start();
    if(($_SESSION['lgnSession'] != 'adm') || ($_SESSION['snhSession'] != '123456')){
        header("Location: ../index.php");
    }

    // 
?>