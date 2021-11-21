<?php

    $conn = mysqli_connect("localhost", "root", "","lendnow");
    if($conn == false){
        die("ERRO: Não conseguiu conectar no MySQL." . mysqli_connect_error());
    }
?>