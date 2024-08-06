<?php
include('controller/conexao.php');
$descricao = $_POST['descricao'];
echo "<h3>Descricão: $descricao</h3>";
$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";
if(mysqli_query($mysqli, $cad_categoria)){
    echo "<h1>Categoria cadastrada com sucesso!<h1><br>";
}else{
    echo "erro: " . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
