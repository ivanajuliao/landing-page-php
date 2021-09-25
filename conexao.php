<?php

    // Define os parâmetros para conexão com o banco
    $hostname = "localhost";
    $bancodedados = "lading_page";
    $usuario = "root";
    $senha = "";
    // cria uma nova conexão com o BD
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    // verifica status de conexão
    if($mysqli ->connect_errno){
        echo "Falha ao conectar: (" .$mysqli->connect_errno .") " .$mysqli->connect_error;
    }else{
        echo "Mensagem enviada com sucesso!";
        // Redirecionamento de página
        header('Location: ./main.html');
    }

?>