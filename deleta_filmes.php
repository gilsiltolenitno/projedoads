<?php
    require("conecta.php"); 

    $id_filmes = $_POST['id_filmes'];

    $sql = "DELETE FROM filmes 
        WHERE id_filmes = '$id_filmes'";

    if ($conn->query($sql) === TRUE) {
echo "<center><h1>Registro Deletado com Sucesso</h1>";
echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
} else {
echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

