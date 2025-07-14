<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Número</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numero">Verifica número :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

     <? 
     function contarPares($n) {
    $contador = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) $contador++;
    }
    return $contador;
        };
?>
</body>
</html>