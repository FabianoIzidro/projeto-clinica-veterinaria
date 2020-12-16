<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    html { height: 100%;}

    .menu-item {
        color: white;
        padding: 0;
        margin: 0;
        font-size: 20px;
        text-align: center;
        float: left;
        list-style: none; 
        width: 80%;
        margin: 4px;
    }
    .menu-item:hover{
        background-color:rgb(80, 211, 235);
        border-radius: 1px;

    }

    #container {
        background: url({{asset('imagem/imagescxc.jpg')}}) ;
        background-repeat:repeat;
        background-position:center;
        box-sizing: border-box;
        font-family: sans-serif;
        height: 100%;

    }
    #barra{
        background-position:center;
        display: flex;
        flex-direction: row;
        background-color:#139bda;
        position: relative;
        left:10%;
        width: 80%;
    }
        .sub-menu{
            display: none;
            font-size: 10px;
    }
        .menu-item:hover .sub-menu{
            display: block;
            position: absolute;
            background: rgb(80, 211, 235);
            margin-top: 15px;
            margin-left: - 15px;
    }
        .menu-item:hover .sub-menu{
            display: block;
            margin: 0px;
            width: 150px;
            padding: 10px;
    }   
        .menu-item:hover .sub-menu{
            width: 145px;
            padding: 12px;
            border-bottom: 1px dotted;
            border-radius: 0;
            text-align:center;

    }   
        .menu-item:hover .sub-menu :last-child{
            border-bottom: none;
            text-decoration: none;
            color: white;
            
    }
        .menu-item:hover .sub-menu:hover{
            background-color: #2178C0;
            text-decoration: none;
    }
</style>
</head>
<body id="container"> 
    <div id="barra">
        <h1 class= "menu-item"> Cadastro cliente
            <div class= "sub-menu">
                <h1 ><a href="{{route('cadastro_C')}}">Novo cadastro</a></h1>
                <h1 >pesquisar</h1>
            </div>
        </h1>
        <h1 class= "menu-item">Cadastro animal
            <div class= "sub-menu">
                <h1 ><a href="{{route('cadastro_A')}}">Novo cadastro</a></h1>
                <h1 >pesquisar</h1>
            </div>
        </h1>
        <h1 class= "menu-item">Consulta
            <div class= "sub-menu">
                <h1 >Nova consulta</h1>
                <h1 >pesquisar</h1>
            </div>
        </h1>
        <h1 class= "menu-item">Internacao
            <div class= "sub-menu">
                <h1 >Novo</h1>
                <h1 >pesquisar</h1>
            </div>
        </h1>
        <h1 class= "menu-item">Financeiro
            <div class= "sub-menu">
                <h1 >Pagamento</h1>
                <h1 >pesquisar</h1>
            </div>
        </h1>
        <h1 class= "menu-item">Estoque
            <div class= "sub-menu">
                <h1 >Nova compra</h1>
                <h1 >pesquisar</h1>
            </div>
        </h1>
    </div>
</body>
</html>