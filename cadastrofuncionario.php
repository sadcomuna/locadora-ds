<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<?php

    $erros = []; // $erros = new Array();

    if(count($_POST) > 0) {
        /*
        print_r($_POST);

        echo $_GET['dir'], '<br>';
        echo $_GET['file'], '<br>';

        echo "Nome  : {$_POST['nome']} <br>";
        echo "E-mail: {$_POST['email']} <br>";

        $nome = $_POST['nome'];
        */
    }

    
?>

<h2> Cadastro do Funcionário </h2>


<form action="insert2.php" method="post">

    <div class="form-row">

        <div class="form-group col-md-8">

            <label for="nome">Nome</label>

            <input class="form-control" type="text" 
            name="nome" id="nome" placeholder="Digite o nome completo">

        </div>

       
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input class="form-control" type="email" 
            name="email" id="email" placeholder="E-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="telefone"> Telefone </label>
            <input class="form-control" type="number" 
            name="telefone" id="telefone" placeholder="Digite seu telefone">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="rua">Rua</label>
            <input class="form-control" type="text" 
            name="rua" id="rua" placeholder="Digite sua rua">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Número da Casa</label>
            <input class="form-control" type="number" 
            name="numero_casa" id="numero_casa" placeholder="Digite o número da sua casa">
        </div>
    </div>

    <div class="form-row">

        <div class="form-group col-md-8">

            <label for="bairro"> Bairro</label>

            <input class="form-control" type="text" 
            name="bairro" id="bairro" placeholder="Digite o nome do bairro completo">

        </div>

        <div class="form-group col-md-4">
            <label for="CEP"> CEP</label>
            <input class="form-control" type="text" 
            name="CEP" id="CEP" placeholder="Digite o CEP da sua rua">
        </div>
    </div>

<div class="form-row">

        <div class="form-group col-md-8">

            <label for="cidade"> Cidade</label>

            <input class="form-control" type="text" 
            name="cidade" id="cidade" placeholder="Digite o nome da sua cidade completo">

        </div>

        <div class="form-group col-md-4">
            <label for="UF"> UF </label>
            <div class="col-sm-s"> 
            <div class="form-group ">
       
        <div class="col-sm-8">
        <select name="UF" class="form-control" id="UF">

        <option value="Acre (AC)">Acre (AC)</option> 
        <option value="Alagoas (AL)">Alagoas (AL)</option> 
        <option value="Amapá (AP)"> Amapá (AP)</option>
        <option value="Amazonas (AM)">Amazonas (AM)</option> 

       <option value="Bahia (BA)"> Bahia (BA)</option> 

       <option value="Ceará (CE)">Ceará (CE)</option>

       <option value="Distrito Federal (DF)"> Distrito Federal (DF)</option>

       <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>

       <option value="Goiás (GO)">Goiás (GO)</option>

       <option value="Maranhão (MA)">Maranhão (MA)</option>
       <option value="Mato GRosso (MG)">Mato Grosso (MT)</option>
       <option value="Mato Grosso do Sul (MS)"> Mato Grosso do Sul (MS)</option>
       <option value="Minas Gerais (MG)"> Minas Gerais (MG)</option>

       <option value="Pará (PA)">Pará (PA)</option>
       <option value="Paraíba (PB)">Paraíba (PB)</option>
       <option value="Paraná (PR)">Paraná (PR)</option>
       <option value="Pernambuco (PE)">Pernambuco (PE)</option>
       <option value="Piauí (PI)">Piauí (PI)</option>

       <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
       <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
       <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
       <option value="Rondônia (RO)">Rondônia (RO)</option>
       <option value="Roraima (RR)">Roraima (RR)</option>

       <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
       <option value="São Paulo (SP)">São Paulo (SP)</option>
       <option value="Sergipe (SE)">Sergipe (SE)</option>

       <option value="Tocantins (TO)">Tocantins (TO)</option>
            
      </select>
     </div>
    </div> 
            
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>