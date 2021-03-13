<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>Número de notas</title>
</head>
<body>
    <form method="POST" action="notas.php">
        <div class="input-group">
            <label for="numeroDeNotas">Número de notas:</label>
            <input type="number" min="0" max="10" name="numeroDeNotas" id="numeroDeNotas" placeholder="Digite a quantidade de notas"/>
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>