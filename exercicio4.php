<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">Digite o número da tabuada:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="tabuada">Calcular</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            
            $numero = $_POST['numero'];
            $i = 1;
            while ($numero > 1){
            $i *= $numero;
            $numero--;
            }
            echo $i;
        };
    ?>
</body>
</html>