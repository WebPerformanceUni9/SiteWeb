<?php
    $host= 'localhost';
    $usuario= 'root';
    $senha= '';
    $dbname= 'web_performance';

    $conexao = new mysqli($host,$usuario,$senha,$dbname);

    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "OK.";
    }
    */
?>