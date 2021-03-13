<?php
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA1 **
//  ************************************************************
    if(isset($_POST['nota1'])){
        $notas =[
            $_POST['nota1']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA2 **
//  ************************************************************
    if(isset($_POST['nota2'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA3 **
//  ************************************************************
    if(isset($_POST['nota3'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA4 **
//  ************************************************************
    if(isset($_POST['nota4'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA5 **
//  ************************************************************
    if(isset($_POST['nota5'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA56 **
//  ************************************************************
    if(isset($_POST['nota6'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA7 **
//  ************************************************************
    if(isset($_POST['nota7'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA8 **
//  ************************************************************
    if(isset($_POST['nota8'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7'],
            $_POST['nota8']
        ];
    }
//  ************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA9 **
//  ************************************************************
    if(isset($_POST['nota9'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7'],
            $_POST['nota8'],
            $_POST['nota9']
        ];
    }
//  *************************************************************
//  ** TESTE PARA VERIFICAR SE HÁ ALGUMA COISA NO INPUT NOTA10 **
//  *************************************************************
    if(isset($_POST['nota10'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7'],
            $_POST['nota8'],
            $_POST['nota9'],
            $_POST['nota10']
        ];
    }


    $maior = max($notas);
    $menor = min($notas);


    $soma = 0;   
    foreach($notas as $i){
        $soma = $soma + $i;
    }

    $resultado = $soma / count($notas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles-global.css" />
    <title>Médias das notas</title>
</head>
<body>
    <form>
        <div class="input-group">
            <input type="text" readonly name="media" id="media" value="A média é: <?=$resultado?>"/>
        </div>
        <div class="input-group">
            <input type="text" readonly name="media" id="media" value="A maior nota é: <?=$maior?>"/>
        </div>
        <div class="input-group">
            <input type="text" readonly name="media" id="media" value="A menor nota é: <?=$menor?>"/>
        </div>
    </form>
</body>
</html>