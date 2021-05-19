<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
    <style>
        body{
            margin: auto;
            width: 400px;
        }
        div{
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Sessão</h1>

    <form action="session.php" method="post">
        <div>
            <label for="msg">Mensagem: </label>
            <textarea name="msg" id="msg" cols="50" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
</body>
</html>