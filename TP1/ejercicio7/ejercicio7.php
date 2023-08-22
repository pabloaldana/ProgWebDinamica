<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="calcular.php" method="post">

        <input type="text" name="numero1" id="num1" placeholder="Numero 1"> </br>
        <input type="text" name="numero2" id="num2" placeholder="Numero 2">
        </br></br>
        <select name="operacion" id="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
        </select>
    
        <input type="submit" value="Enviar">

    </form>


</body>
</html>