<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Números Pares</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit" name="contar">Contar</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contar'])){
            $numero = $_POST['numero'];
            $contador = 0;
            
            for ($i = 1; $i <= $numero; $i++) {
                if ($i % 2 == 0) {
                    $contador++;
                }
            }
            echo "Existem " . $contador . " números pares entre 1 e " . $numero;
        }
    ?>
</body>
</html>