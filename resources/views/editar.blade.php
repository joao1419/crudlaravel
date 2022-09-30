<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Pessoa</title>

</head>

<body>
    <center>
        <h1>Resultados:</h1>
        <p>ID: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
        <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
            @csrf
            <label for="lblNome">Nome: </label>
            <input type="text" name="nome" value="{{$pessoa->nome}}">
            <br><br>
            <label for="lblIdade">Idade: </label>
            <input type="text" name="idade" value="{{$pessoa->idade}}">
            <br><br>
            <button>Atualizar</button>&nbsp;
            <a href="/"><button> Voltar</button></a>
        </form>
    </center>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Text&family=Oswald:wght@200&display=swap');

        * {

            margin: 10;
            padding: 10px;

        }



        body {
            background-image: linear-gradient(to right, rgb(0, 0, 0), rgb(100, 100, 100));
        }

        h1 {
            font-family: 'Oswald', sans-serif;
            color: white;
        }

        p {
            font-family: 'Oswald', sans-serif;
            color: white;
        }

        label {
            font-family: 'Oswald', sans-serif;
            font-size: 19px;
            color: white;
        }

        input {
            border-radius: 5px;
            color: black;
            font-family: 'Abyssinica SIL', serif;
        }

        button {
            background-color: transparent;
            border-radius: 5px;
            font-family: 'Oswald', sans-serif;
            border-color: white;
            color: white;
            font-size: 15px;
            height: 40px;
            width: 100px;
        }
    </style>


</body>

</html>