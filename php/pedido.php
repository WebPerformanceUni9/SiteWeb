<?php
    $home = "../index";
    include("config.php");
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $telefone= $_POST['telefone'];
    $cnpj_cpf= $_POST['cnpj_cpf'];
    $tipo_servico= $_POST['pedido'];

    $sql="INSERT INTO cadastro(nome, email, telefone, cnpj_cpf, tipo_servico)
    VALUES ('$nome','$email','$telefone','$cnpj_cpf','$tipo_servico')";
    
    
    if(mysqli_query($conexao, $sql))
    {
        header("Location: $home.html");
        die();
    }
    else
    {
        echo "Erro".mysqli_connect_error($conexao);
    }
    
?>