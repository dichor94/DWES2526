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
    <form method="post" action="">
        <label for="figura">FIGURA:</label>
        <select name="figura" id="figura">
            <option value="circulo" >Círculo</option>
            <option value="triangulo" >Tringulo</option>
            <option value="rectangulo" >Rectángulo</option>
        </select>
        <label for="base">Base</label>
        <input type="text" name="base" id="base">
        <label for="altura">Altura</label>
        <input type="text" name="altura" id="altura">
        <label for="radio">Radio</label>
        <input type="text" name="radio" id="radio" placeholder="Solamente para el círculo">
        <input type="submit" value="Calcular" name="calcular">
    </form>


    <?php

//Pongo esta condición para que no de error al inicio del html, ya que no será null y nos salta un error.
    if(isset($_POST["calcular"]) and $_POST["calcular"] == "Calcular"){

        $base = intval($_POST["base"]) ?? 0;
        $altura = intval($_POST["altura"]) ?? 0;
        $radio = intval($_POST["radio"]) ?? 0;


    }


    if($_POST["figura"] == "triangulo"){

        calcularAreaTriangulo($base, $altura);


    }else if($_POST["figura"] == "rectangulo"){

         calcularAreaRectangulo($base, $altura);

    }else if($_POST["figura"] == "circulo"){

        calcularAreaCirculo($radio);


    }

    function calcularAreaTriangulo($base, $altura){

        $funcion = ($base * $altura)/2;

        echo "El área del triángulo es de: $funcion";

    }


    function calcularAreaRectangulo($base, $altura){

        $funcion = $base * $altura;

        echo "El área del rectángulo es de: $funcion";

    }

    function calcularAreaCirculo($radio){

        $numPi = pi();

        $funcion = $numPi * ($radio * 2);

        $redondeo = round($funcion, 2);

        echo "El área del circulo es de: $redondeo";



    }


?>

</body>
</html>



