<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el número</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:rgb(255, 255, 255);
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            width: 80px;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color:rgb(255, 174, 0);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:rgb(179, 116, 0);;
        }

        .mensaje {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .correcto {
            color: green;
        }

        .incorrecto {
            color: red;
        }
    </style>
</head>
<body>

<h1>Adivina un número del 1 al 5</h1>

<form method="post">
    <label for="numero">Tu número:</label><br>
    <input type="number" name="numero" id="numero" min="1" max="5" required><br>
    <button type="submit">Adivinar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["numero"];
    $aleatorio = rand(1, 5);

    echo "<div class='mensaje'>";
    if ($usuario == $aleatorio) {
        echo "<p class='correcto'>¡Wow, adivinaste! El número era $aleatorio.</p>";
    } else {
        echo "<p class='incorrecto'>¡Sigue intentando! El número correcto era $aleatorio.</p>";
    }
    echo "</div>";
}
?>

</body>
</html>
