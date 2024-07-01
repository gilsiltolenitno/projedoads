<?php
    $servername = "localhost";
    $database = "locadorapessoal";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password, $database);

  // Checar conexão
if ($conn->connect_error) {
    die("Ligação falhou: " . $conn->connect_error);
}

echo "Ligação bem sucedida";





?>