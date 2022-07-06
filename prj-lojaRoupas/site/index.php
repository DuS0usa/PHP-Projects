<?php
    $tenis = array(
        't1' => array('../foto/tenis1.jpg','Tênis Preto', 'R$450'),
        't2' => array('../foto/tenis2.jpg','Tênis Cinza Nike', 'R$400'),
        't3' => array('../foto/tenis3.jpg','Tênis Preto Puma', 'R$320'),
        't4' => array('../foto/tenis4.jpg','Tênis Florido', 'R$455'),
    );

    $calca = array(
        'c1' => array('../foto/calça1.jpg','Calça Preta (F)', 'R$270'),
        'c2' => array('../foto/calça2.jpg','Calça Bege', 'R$200'),
        'c3' => array('../foto/calça3.png','Calça Tactel Azul', 'R$250'),
        'c4' => array('../foto/calça4.jpg','Calça Cinza Cargo', 'R$370'),
    );

    $camiseta = array(
        'cam1' => array('../foto/camiseta1.png','Camiseta Bege Lisa', 'R$150'),
        'cam2' => array('../foto/camiseta2.png','Camiseta Azul Lisa', 'R$150'),
        'cam3' => array('../foto/camiseta3.png','Camiseta Estampada', 'R$170'),
        'cam4' => array('../foto/camiseta4.png','C. Barcelona', 'R$250'),
    );

    $acessorio = array(
        'acss1' => array('../foto/acss1.png','Relógio Smartwatch', 'R$950'),
        'acss2' => array('../foto/acss2.jpg','Pulseira de Ouro', 'R$1.950'),
        'acss3' => array('../foto/acss3.png','Colar de Ouro', 'R$2.557'),
        'acss4' => array('../foto/acss4.png','Bolsa de Couro GUCCI', 'R$2.150'),
    );
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>FOX • MODEL</title>
        <link rel="stylesheet" type="text/css" href="../css/layout.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>

    <body style="background-color: #80678A;">
        <nav class="navbar navbar-dark" style="background-color:#35213E;">
            <a class="navbar-brand" href="#">
                <img src="../foto/logoRaposa.png" width="35" height="35" class="d-inline-block align-top" alt="Fox">
            </a>
            <h2 class="navbar-texto">Fox Model</h2>
        </nav>
        <!-- Se tiver tudo torto ou bagunçado é porque meu CSS está de birra e não estava rodando... 
        eu odeio CSS com todas as minhas forças. Obrigado, até a próxima -->
        <div id="corpo">
            <div id="cabecalho">
                <div id="form">
                    <center>
                    <form method="post" action="cadastroCategoria.php">
                        <label>CATEGORIA: </label>
                        <select id="catProduto" name="catProduto">
                            <option value="1">Tênis</option>
                            <option value="2">Camisa</option>
                            <option value="3">Calça</option>
                            <option value="4">Acessório</option>
                        </select>
                        <button type="submit">Selecionar</button>
                    </form>
                    </center>
                </div>
            </div>               

            <?php 
                if(empty($_COOKIE['cProduto'])){
                    // ----- SEM NADA NO COOKIE == CAMISA 1º ----- //
                    $produtos = array($camiseta, $calca, $tenis, $acessorio);
                    $prodAleatorio = array_rand($produtos);


                    echo("<div class='categoria-cards'>");
                        
                        foreach($prodAleatorio as $produtos => $v1){
                            echo($produtos);
                        }
                        
                    echo("</div");
                    
                    
                    
                }
                // } else if($_COOKIE['cProduto'] == 1){            
                //     // ----- TÊNIS 1º ----- //
                //     echo("<div class='categoria-cards'>");
                //         foreach($tenis as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($camiseta as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($calca as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($acessorio as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");

                // } else if($_COOKIE['cProduto'] == 2){
                //     // ----- CAMISA 1º ----- //
                //     echo("<div class='categoria-cards'>");
                //         foreach($camiseta as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($acessorio as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($calca as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($tenis as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");

                // } else if($_COOKIE['cProduto'] == 3){
                //     // ----- CALÇA 1º ----- //
                //     echo("<div class='categoria-cards'>");
                //         foreach($calca as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($camiseta as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($acessorio as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($tenis as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");

                // } else if($_COOKIE['cProduto'] == 4){
                //     // ----- ACESSÓRIO 1º ----- //
                //     echo("<div class='categoria-cards'>");
                //         foreach($acessorio as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($camiseta as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($calca as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                //     echo("<div class='categoria-cards'>");
                //         foreach($tenis as $key => $value){
                //             echo("                                                  
                //                 <div class='cards'>
                //                     <div class='foto'>
                //                         <img src=". $value[0] ." class='foto1'>
                //                     </div>
                //                     <div class='info'>
                //                         <h5>" . $value[1] ."</h5>
                //                         <p>" . $value[2] . "</p>
                //                     </div>
                //                 </div>                                    
                //             ");
                //         }
                //     echo("</div");
                // }
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>
</html>