<?php

	require_once("conexao.php");

    $nome =  ucwords(strtolower($_POST['nome']));
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    print_r($nome);
    print_r($email);
    print_r($mensagem);
    
    $sql = "INSERT INTO cliente (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
    $result = $mysqli->query($sql); 
        
    


	

?>