<?php

	require_once("conexao.php");
    if(isset($_POST['submit'])) {
        $nome =  ucwords(strtolower($_POST['nome']));
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
    
        print_r($nome);
        print_r($email);
        print_r($mensagem);
        
        $sql = "INSERT INTO cadastro (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
        $result = $mysqli->query($sql); 
        
    }


	

?>