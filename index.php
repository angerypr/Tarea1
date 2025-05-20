<!-- Angery Payamps 2024-0215 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:rgb(207, 205, 205);
            margin: 0;
            padding: 0;
        }

        #mitarea1 {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 16px;
        }

        #divMenu {
            margin-top: 30px;
        }

        .menu-button {
            display: inline-block;
            background-color:rgb(255, 174, 0);
            color: white;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .menu-button:hover {
            background-color:rgb(179, 116, 0);
            transform: scale(1.05);
        }

        #divFooter {
            margin-top: 40px;
            font-size: 14px;
            color: #999;
        }

        hr {
            margin: 25px 0;
        }
    </style>
</head>
<body>
    <div id="mitarea1">
        <h1>Tarea 1</h1>
        <p>Esta es la tarea 1 de la materia de Programación Web</p>
        <hr>
        
        <div id="divMenu">
            <h2>Menú Principal</h2>
            <a href="mi_tarjeta.php" class="menu-button">Mi Tarjeta</a>
            <a href="calculadora.php" class="menu-button">Calculadora</a>
            <a href="adivina.php" class="menu-button">Adivina el Número</a>
            <a href="acerca_de.php" class="menu-button">Acerca de</a>
        </div>

        <div id="divFooter">
            <p>Esta tarea es un ejemplo de uso de HTML y CSS sencillo</p>
            <p>Desarrollado por Angery Payamps</p>
        </div>
    </div>
</body>
</html>
