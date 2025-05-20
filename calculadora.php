<!-- Angery Payamps 2024-0215 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(255, 255, 255);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            width: 100%;
            max-width: 400px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background-color: rgb(255, 174, 0);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: rgb(179, 116, 0);
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            color: green;
            text-align: center;
        }

        .error {
            color: red;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Primer número" required>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <select name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "sumar":
                $resultado = $num1 + $num2;
                echo "<div class='resultado'>Resultado: $resultado</div>";
                break;
            case "restar":
                $resultado = $num1 - $num2;
                echo "<div class='resultado'>Resultado: $resultado</div>";
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                echo "<div class='resultado'>Resultado: $resultado</div>";
                break;
            case "dividir":
                if ($num2 == 0) {
                    echo "<div class='error'>Error: No se puede dividir entre cero.</div>";
                } else {
                    $resultado = $num1 / $num2;
                    echo "<div class='resultado'>Resultado: $resultado</div>";
                }
                break;
            default:
                echo "<div class='error'>Operación no válida.</div>";
        }
    }
    ?>
</body>
</html>
