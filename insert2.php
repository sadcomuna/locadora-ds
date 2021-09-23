<?php

$local_serve = "localhost"; 

$usuario_serve = "root"; 

$senha_serve = "";  
              
$banco = "locadora";      

$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não foi possivel conectar-se ao banco de dados!");

//Tabela Funcionário

$nome = $_POST['nome'];

$email = $_POST['email'];

$telefone = $_POST['telefone'];

$rua = $_POST['rua'];

$numero_casa = $_POST['numero_casa'];

$bairro = $_POST['bairro'];

$CEP = $_POST['CEP'];

$cidade = $_POST['cidade'];

$UF = $_POST['UF'];

$sqlinsert = "INSERT INTO funcionario(nome, id_funcionario, email, telefone, rua, numero_casa, bairro, CEP, cidade, UF) VALUES('$nome','$email','$telefone','$rua','$numero_casa', '$bairro', '$CEP', '$cidade, '$UF')";

mysqli_query($conn, $sqlinsert) or die ("Não foi possível inserir os dados"); 
mysqli_close($conn);

echo "Inseridos na Tabela FUNCIONARIO <br />Nome: $nome <br /> E-mail: $email <br /> Telefone: $telefone <br /> Rua: $rua <br /> Número da casa: $numero_casa <br /> Bairro: $bairro <br /> CEP: $CEP <br /> Cidade: $cidade <br /> UF: $UF";

?>