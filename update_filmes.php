<?php

require("conecta.php"); 
    

$titulo = $_POST['titulo'];
$genero =  $_POST['genero'];
$ano = $_POST['ano'];
$idioma = $_POST['idioma'];
$id_filmes = $_POST['id_filmes'];


    $sql = "UPDATE filmes SET
            titulo = '$titulo', genero = '$genero',ano = '$ano', idioma ='$idioma'
            WHERE id_filmes = '$id_filmes'";

            if ($conn->query($sql) === TRUE) {
     echo "<center><h1>Registro Atualizado com Sucesso</h1>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
  } else {
    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
  }
    $conn->close();


?>