<?php

    header("Location: index.php");

    $cat = $_POST['catProduto'];

    setcookie('cProduto',$cat);

?>