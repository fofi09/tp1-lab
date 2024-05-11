<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <link rel="stylesheet" href="calculadora.css">
   
    
</head>
<body>

<div id="header">
        <ul class="nav">
            <li><a href="index.php">menu principal</a>
            <li><a href="integrantes.php">integrantes</a></li>
            </li>
        </ul>
        <br> <br> <br>
    </div>
    <div id="form">
<form action="calculadora.php" method="post">
       ingrese un numero: <input type="text" name="numero1"><br>
       ingrese otro numero: <input type="text" name="numero2"><br>
       elija la operacion que desea realizar: <select name="opciones">
            <option value="0">sumar</option>
            <option value="1">restar</option>
            <option value="2">multiplicar</option>
            <option value="3">dividir</option>
        </select>
        <br> 
        <input type="submit" name="calcular" value="calcular" id="calcular_btn">
    </form>
    </div>

<?php
include("calcular.php");
if (isset($_REQUEST['calcular'])) {
    $n1=$_REQUEST['numero1'];
    $n2=$_REQUEST['numero2'];
    $op=$_REQUEST['opciones'];

}
switch($op){
    case 0:echo "$n1 + $n2 =" .matematicas::sumar($n1,$n2);break;
    case 1:echo "$n1 - $n2 =" .matematicas::restar($n1,$n2);break;
    case 2:echo "$n1 * $n2 =" .matematicas::multiplicar($n1,$n2);break;
    case 3:echo "$n1 / $n2 =" .matematicas::dividir($n1,$n2);break;
 }
?>
</body>
</html>
