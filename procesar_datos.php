<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $email = htmlspecialchars($_POST['email']);
    $edad = htmlspecialchars($_POST['edad']);
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f0f0;
            }
            div {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
        </style>
    </head>
    <body>

    <div>
        <h2>Bienvenido</h2>
        <p>¡Hola <?php echo $nombre; ?>!</p>
        <p>Tu dirección es <?php echo $direccion; ?></p>
        <p>Tienes <?php echo $edad; ?> años y tu correo es <?php echo $email; ?></p>
    </div>

    </body>
    </html>

    <?php
}
?>
