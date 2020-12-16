<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listar Animal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    #tela{
    background-color: #2f8dda;
        color: white;
}
    .cadastro{
        color: white;
        margin: 5px 15px 20px 20px;
        font-weight: bold;
        font-size: 15px;
}
    .titulo{
        color: white;
        text-align: center;
    
}
    .opcao{
        color: white;
        text-align:left;
        text-decoration: none;
}
    .button{
        width:55%;
        border: 2px solid #00BFFF;
        border-radius: 20px;
        font-size: 20px;
        margin: 25px 60px 5px 25px;
        text-align: center;
        background-color: rgba(5, 5, 5, 0.87);
        text-decoration: none;
        color: white;
        
    }
    .apresentacao{
        margin: 2%;  
        text-align:left;
        font-size: 30px;
        width:25%;
        font-weight: bold;
    }

</style>  
</head>

<body  id="tela">
    <div class ="titulo">
    
		<p><h1> DADOS </h1></p>
        </div>
        <div class ="apresentacao">
            @if(session('sucesso'))    
                <p class="alert alert-sucess">{{session('sucesso')}}</p>
                
        </div>
        @endif
        <div class ="opcao">
        <a href="{{route('logout')}}"><div class= "button"> logout({{session('usuario')}})</div></a>

        </div>
    <br/>
    <h1>Animais</h1>

	<table class="table table-bordered">
		<thead class="thead-dark">
		<tr>
		     <th>Nome Animal</th>
             <th>Responsavel</th>
             <th>Data Nascimento</th>
             <th>Data da Ultima Vacina</th>
             <th>Cor</th>
             <th>Altura</th>
             <th>Peso</th>
             <th>Sexo</th>
             <th>Especie</th>
             <th>Raça</th>
		     <th width="10%">Opções</th>
		</tr>
		</thead>
			    <tbody>
                    @foreach ($animais as $animal)
			      	<tr>
			        	<td>{{$animal['NomeAnimal']}}</td>
                        <td>{{$animal['responsavel']}}</td>
                        <td>{{$animal['DataNascimento']}}</td>
                        <td>{{$animal['DataVacina']}}</td>
                        <td>{{$animal['cor']}}</td>
                        <td>{{$animal['altura']}}</td>
                        <td>{{$animal['peso']}}</td>
                        <td>{{$animal['sexo']}}</td>
                        <td>{{$animal['especie']}}</td>
                        <td>{{$animal['raca']}}</td>
			        	<td>
							<a href="{{route('visualizar_A', ['id' =>$animal['id']])}}" id="tela">Visualizar</a>
			        		<a href="{{route('edicao_A', ['id' =>$animal['id']])}}" id="tela">Editar</a>
			        		<a href="{{route('excluir_A', ['id' =>$animal['id']])}}" id="tela">Excluir</a>
			        	</td>
                      </tr>
                      @endforeach	 
			    </tbody>
			</table>
	</div>
</body>
</html>