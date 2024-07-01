<?php
    require("conecta.php");

    $titulo = $_POST['titulo'];
    $genero =  $_POST['genero'];
    $ano = $_POST['ano'];
    $idioma = $_POST['idioma'];
   

     
    $sql = "INSERT INTO filmes (titulo, genero, ano, idioma)  
    VALUES ('$titulo', '$genero', '$ano', '$idioma')" ;
   
   if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Registro Inserido com Sucesso</h1>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
  } else {
    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
  }
    $conn->close();
?>