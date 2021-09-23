<?php

$local_serve = "localhost"; 

$usuario_serve = "root"; 

$senha_serve = "";  
              
$banco = "locadora";      

$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não foi possivel conectar-se ao banco de dados!");


// Tabela Veículos

$placa = $_POST['placa'];

$chassi = $_POST['chassi'];

$fabricante = $_POST['fabricante'];

$modelo = $_POST['modelo'];

$ano_fab = $_POST['ano_fab'];

$cor = $_POST['cor'];

$tipo = $_POST['tipo'];

$sqlinsert = "INSERT INTO veiculo(placa, chassi, fabricante, modelo, ano_fab, cor, tipo) VALUES('$placa, '$chassi', '$fabricante', '$modelo', '$ano_fab', '$cor', '$tipo')";

mysqli_query($conn, $sqlinsert) or die ("Não foi possível inserir os dados"); 
mysqli_close($conn);

echo "Inseridos na Tabela VEICULO <br /> Placa: $placa <br /> Chassi: $chassi <br /> Fabricante: $modelo <br /> Ano de Fabricação: $ano_fab <br /> Cor: $cor <br /> Tipo: $tipo";
?>