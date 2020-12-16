<!DOCTYPE html>
<html lang="en">
<head>
    <title>visualizar cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>

    #tela{
    background-color: #2f8dda;
    color: white;
    margin: 25px 60px 5px 25px;
}
    .titulo{
        color: white;
        text-align: center;
    
}
.button{
        width:15%;
        border: 2px solid #00BFFF;
        border-radius: 20px;
        font-size: 20px;
        margin: 25px 60px 5px 25px;
        text-align: center;
        background-color: rgba(10, 10, 10, 0.87);
        text-decoration: none;
        color: white;
}
    </style>
</head>
<body id="tela">
    <tr>
        <div class="page-header">
            <h1 class ="titulo">Clientes</h1>
            <h1>Nome:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['NomeCliente']}}</span>
            <h1>Facebook:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['facebook']}}</span>
            <h1>Data Nascimento:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['DataNascimento']}}</span>
            <h1>Telefone:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['telefone']}}</span>
            <h1>CPF:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['CPF']}}</span>
            <h1>RG:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['RG']}}</span>
            <h1>Sexo:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['rua']}}</span>
            <h1>Numero:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['numero']}}</span>
            <h1>CEP:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['CEP']}}</span>
            <h1>Cidade:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['cidade']}}</span>
            <h1>Bairro:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['bairro']}}</span>
            <h1>Estado:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$cliente['estado']}}</span>
        </div> 
    <br/>
        <td>
            <a href="{{route('retornar_C', ['id' =>$cliente['id']])}}"><div class="button"> Visualizar</div></a>
        </td>
   </tr>
   </thead>            
</body>
</html>