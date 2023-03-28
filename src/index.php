<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action="main.php">
        <label for="num1">Numero 1: </label>
        <input type="text" name="num1" id="num1">
        <br>
        <label for="num2">Numero 2: </label>
        <input type="text" name="num2" id="num2">
        <br>
        <label for="op">Operaçao:</label>
        <select name="op" id="op">
            <option value="+">Somar</option>
            <option value="*">Multiplicar</option>
            <option value="-">Subtrair</option>
            <option value="/">Dividir</option>
        </select>
        <br>
        <button type= "submit">Calcular</button>
    </form>
</body>
</html>
