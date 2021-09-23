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

<h2> Cadastro do Veículo </h2>


<form action="insert3.php" method="post">

    <div class="form-row">

        <div class="form-group col-md-8">

            <label for="placa"> Placa </label>

            <input class="form-control" type="text" 
            name="placa" id="placa" placeholder="Digite a placa completa">

        </div>

       
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="chassi">Chassi</label>
            <input class="form-control" type="text" 
            name="chassi" id="chassi" placeholder="Digite o chassi completo">
        </div>
        <div class="form-group col-md-6">
            <label for="fabricante"> Fabricante </label>
            <input class="form-control" type="fabricante" 
            name="fabricante" id="fabricante" placeholder="Digite o nome do fabricante">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="modelo">Modelo</label>
            <input class="form-control" type="text" 
            name="modelo" id="modelo" placeholder="Digite seu modelo">
        </div>
        <div class="form-group col-md-6">
            <label for="ano_fab">Ano de Fabricação</label>
            <input class="form-control" type="number" 
            name="ano_fab" id="ano_fab" placeholder="Digite o ano de fabricação">
        </div>
    </div>


        <div class="form-group col-md-4">
            <label for="cor"> Cor </label>
            <div class="col-sm-s"> 
            <div class="form-group ">
       
        <div class="col-sm-8">
        <select name="cor" class="form-control" id="cor">

        <option value="Amarelo">Amarelo</option> 
        <option value="Azul"> Azul </option>

        <option value="Branco">Branco</option>

        <option value="Cinza Claro">Cinza Claro</option>
        <option value="Cinza Escuro">Cinza Escuro</option>

        <option value="Rosa">Rosa</option>
        <option value="Preto">Preto</option>
        
        
        <option value="Verde">Verde</option>
        <option value="Vermelho">Vermelho</option>

      </select>
     </div>
    </div> 

    <div class="form-group col-md-15">
            <label for="tipo"> Tipo </label>
            <div class="col-sm-m"> 
            <div class="form-group ">
       
        <div class="col-sm-8">
        <select name="tipo" class="form-control" id="tipo">

        <option value="Cupê">Cupê</option> 
        <option value="Crossover"> Crossover </option>
        <option value="Esportivo">Esportivo</option>
        <option value="Hatchback">Hatchback</option>
        <option value="Jipe">Jipe</option>
        <option value="Picape">Picape</option>
        <option value="Sedan">Sedan</option>
        <option value="SUV">SUV</option>
        <option value="Minivan">Minivan</option>

      </select>
     </div>
    </div> 


        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>