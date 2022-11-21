<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'webperfomance';

    $con = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($con->connect_errno)
    {
        echo "Erro.";
    }
    else
    {
        echo "OK.";
    }

?>