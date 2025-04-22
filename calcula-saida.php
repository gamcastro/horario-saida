<?php
if (isset($_POST['Consultar'])) {
    var_dump($_POST['hora_entrada']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Saída</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>

    <main class="main">
        <div class="container">
            <div>
                <h1>Calculadora de tempo de saída</h1>
                <p>Insira seu horário de check-in para calcular o horário de check-out</p>
            </div>
            <div>
                <form method="post">
                    <label for="hora_entrada">Hora de entrada: </label>
                    <input type="text" name="hora_entrada">
                    <p>Por favor use o formato 24h</p>
                    <button type="submit" name="Consultar">Calcular</button>
                </form>
            </div>

            <div>
                <h2>Horário de Saída</h2>
                <p>--:--</p>
            </div>
            <div>
                <p>Notas:</p>
                <p></p>
            </div>


        </div>
    </main>
    <footer>

    </footer>
</body>

</html>