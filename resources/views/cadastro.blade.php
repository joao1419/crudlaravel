<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoas</title>
   
</head>

<body>
    <center>
        <h1>Cadastro de Usuários</h1>
        <form action="/inserir-pessoas" method="post">
            @csrf
            <p>{{ session() -> get('xyz')}}</p>
            <label for="txtNome">Nome:</label>
            <input type="text" name="nome" id="txtnome">
            <br><br>
            <label for="txtidade">Idade:</label>
            <input type="text" name="idade" id="txtIdade">
            <br><br><br>
            <button type="submit">Confirmar</button> &nbsp;
            <a href="/"><button type="button">Voltar</button></a>
        </form>
        <br>
    </center>


    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Text&family=Oswald:wght@200&display=swap');


        * {

            margin: 5;
            padding: 5px;

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
            padding-top: 5px;
            padding-bottom: 5px;
        }

        label {
            font-family: 'Oswald', sans-serif;
            font-size: 19px;
            color: white;
        }

        input {
            border-radius: 5px;
            color: black;
            font-family: 'Oswald', sans-serif;
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