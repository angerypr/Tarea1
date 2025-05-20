<!-- Angery Payamps 2024-0215 -->
<?php
$nombre = "Angery";
$apellido = "Payamps";
$edad = 19;
$carrera = "Desarrollo de Software";
$universidad = "ITLA";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tarjeta Personal</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(255, 255, 255);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .tarjeta-container {
            width: 90%;
            max-width: 600px;
            padding: 40px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 18px;
            margin: 10px 0;
        }

        .mayor {
            color: green;
            font-weight: bold;
        }

        .menor {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="mi_tarjeta-container">
        <h1>Mi Información Personal</h1>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?></p>
        <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
        <p><strong>Universidad:</strong> <?php echo $universidad; ?></p>

        <?php
        if ($edad >= 18) {
            echo "<p class='mayor'>Eres mayor de edad</p>";
        } else {
            echo "<p class='menor'>Eres menor de edad</p>";
        }
        ?>
    </div>
</body>
</html>
