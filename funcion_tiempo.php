<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 Boletín 3</title>
</head>
<body>
<!--Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche-->

    <form action= "<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
        <p>Introduce la Hora: <input type="number" name="hora"></p>
        <p>Introduce los minutos: <input type="number" name="minuto"></p>
        <p><input type="submit" name="Enviar"/></p>
    </form>

    <?php
    
        $hora=$_POST['hora'];
        $minuto=$_POST['minuto'];

        if (!isset($hora) && !isset($minuto)) {
            echo "<p>Tienes que introducir la hora y el minuto/s</p>";
        }elseif ($hora == "00") {
            echo "<p>Ya es medianoche</p>";
        }elseif (isset($hora) && isset($minuto) && filter_var($hora,FILTER_VALIDATE_INT) && filter_var($minuto,FILTER_VALIDATE_INT)) {
            $tiempo_transcurrido=mktime(23,59,59,0,0,0) - mktime($hora,$minuto,0,0,0,0);
            echo "<p>Quedan ".$tiempo_transcurrido." segundos hasta la medianoche";
        }
       
            
    
    ?>


</body>
</html>