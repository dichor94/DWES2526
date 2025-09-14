<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de figuras</title>
</head>
<body>
    <h3>Selecciona una de las figuras disponibles en el formulario</h3>
    <strong>Para el círculo solamente pondremos el valor en el radio</strong>
    <br><br>
    <form method="post">
        <label for="figura">FIGURA:</label>
        <select name="figura" id="figura">
            <option value="circulo" >Circulo</option>
            <option value="triangulo" >Triangulo</option>
            <option value="cuadrado" >Cuadrado</option>
        </select>
        <label for="base">Base</label>
        <input type="text" name="base" id="base">
        <label for="altura">Altura</label>
        <input type="text" name="altura" id="altura">
        <label for="radio">Radio</label>
        <input type="text" name="radio" id="radio" placeholder="Solamente para el círculo">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>