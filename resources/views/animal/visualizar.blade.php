<!DOCTYPE html>
<html lang="en">
<head>
    <title>visualizar animal</title>
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
            <h1 class ="titulo">Animais</h1>
            <h1>Nome Animal:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['NomeAnimal']}}</span>
            <h1>Responsavel:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['responsavel']}}</span>
            <h1>Data Nascimento:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['DataNascimento']}}</span>
            <h1>Data da Ultima Vacina:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['DataVacina']}}</span>
            <h1>Cor:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['cor']}}</span>
            <h1>Altura:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['altura']}}</span>
            <h1>Peso:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['peso']}}</span>
            <h1>Sexo:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['sexo']}}</span>
            <h1>Especie:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['especie']}}</span>
            <h1>Raça:</h1>
            <span class="d-block p-2 bg-dark text-white">{{$animal['raca']}}</span>
        </div> 
    <br/>
        <td>
            <a href="{{route('retornar_A', ['id' =>$animal['id']])}}"><div class="button"> Visualizar</div></a>
        </td>
   </tr>
   </thead>            
</body>
</html>