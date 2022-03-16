<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<h2>Calculadora de numeros</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="operar"><h4>Escolle que desea realizar:</h4></label>
        <select name="operar">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>
        </select>
    
        <br>
        <br>
        <input type="text" name="num1" >
        <br>
        <input type="text" name="num2" >
        <br>
        <input type="submit" value="Enviar">
        

<?php

$numero1 = $_REQUEST["num1"];
$numero2 = $_REQUEST["num2"];



    if(!isset($_REQUEST["operar"])){
        echo "tes que introducir un numero!";

         }else if(filter_var($_REQUEST['num1'],FILTER_VALIDATE_INT) && (filter_var($_REQUEST['num2'],FILTER_VALIDATE_INT))) {
    
     if ($_REQUEST["operar"]==0)  {
        $suma = $numero1 + $numero2;
    
        echo "<br>"."La suma de ".$numero1 ."+" .$numero2."=" .$suma ;
    
    }else if ($_REQUEST["operar"]==1)  {
        $resta = $numero1 - $numero2;
    
        echo "<br>"."La resta de ".$numero1 ."-" .$numero2."=" .$resta ;
    
    }else if ($_REQUEST["operar"]==2)  {
        $multiplicacion = $numero1 * $numero2;
    
        echo "<br>"."La multiplicacion de ".$numero1 ."*" .$numero2."=" .$multiplicacion ;
    
    }else if ($_REQUEST["operar"]==3)  {
        $division = $numero1 / $numero2;
    
        echo "<br>"."La division de ".$numero1 ."/" .$numero2."=" .$division ;
    } 
}else{
echo "introduce un numero!";
}

    


    
?>

</body>
</html>