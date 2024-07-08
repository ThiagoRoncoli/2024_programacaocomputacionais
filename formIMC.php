<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
    <link rel="stylesheet" href="style.css">
     
</head>
<body>
    <form action="mediaPost.php" method="post">
        <h2 class="form__titulo">Cálculo da Média</h2>
        <label>Nota 1</label>
        <input type="text" name="a1" required><br>
        <label>Nota 2 </label>
        <input type="text" name="a2" required><br>
        <label>Nota 3 </label>
        <input type="text" name="a3" required><br>
        <label>Nota 4 </label>
        <input type="text" name="a4" required><br><br>
        <div class="form__botao">
        <input class="form__botao__bt" type="submit" value="Calcular">
        </div>
    </form>

    <div>
    <footer>Direitos Autorais</footer>
    </div>

</body>
</html>