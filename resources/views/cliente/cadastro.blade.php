<!DOCTYPE html>
<html lang="en">
<head>
    <title>cadastro cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .cadastro{
            color: white;
            text-align: center;
        } 
        #borda{
            border: 10px solid white;
            border-style:outset;
            border-radius: 10px;
            margin: 5px 2px 5px 5px;
        }
        
        .formulario{
            color: white;
            font-size: 20px;
            text-align: center;
            
        }
        #borda-inferior{
            background-color: red;
            border: 4px solid white;
            margin: 15px 250px 15px 250px;
            
            
        }
        #conteudo-principal{
            background-color: #00BFFF;
            margin: 0px 250px 10px 250px;
            color: black;
            font-weight: bold;
            padding: 2%;
            
        }
        .imagem{
            border-radius: 10px;
            float:inline-start;
            top: 180px;
            left: 540px;  
            margin: 5px 5px 0px 50px;
            width: 52%    
            
        }   
        .fonte-padrao{
            color: white;
        }
        #tela{
            background-color: #2f8dda;
        }
        .button{
            width:50%;
            color: #0077ff;
            border: 1px solid #00BFFF;
            border-radius: 10px;
            font-size: 20px;
            margin: 3px;
            
        }
        .button2{
            width:10%;
            color: #0077ff;
            border: 1px solid #00BFFF;
            border-radius: 10px;
            font-size: 14px;
            margin: 6px;
            text-align: center;
            
        }
        
    </style>
</head>
<body id = "tela">
    <div id="borda">
        <h1 class = "cadastro" >CADASTRO CLIENTE</h1>
        @if($errors->any())
        <div class= "alert alert-danger">
            <strong>Erro!</strong>
            @foreach($errors->all() as $erro)
            <p> {{$erro}} </p>
            @endforeach
        </div>
        @endif
        <p id ="borda-inferior" class= "formulario"><b>Formulário</b></p> 
        <div id ="conteudo-principal" >
            <a href="voltar_C"><input type = "submit" value="Voltar" class= "button2" /></a>
            <a href="telalogin_C"><input type = "submit" value="Tela Inicial" class= "button2" /></a>
            <a href="listar_C"><input type = "submit" value="Listar" class= "button2" /></a>
            
            <tr width="100%">
                <td width="30%" align="center"><img src ="{{asset("imagem/vet(1).jpg")}}" class ="imagem"/></td>
            </tr>       
            
            <form action= "{{route('cadastrar_C')}}" method="POST">
                @csrf
                <div clear = "both"> 
                    <fieldset align ="center" >
                    @include('cliente._form')
                    <button type="submit" class= "button">Cadastrar</button>
                </fieldset>
                <br/>
            </div>
        </form>            
        
    </body>
    </html>