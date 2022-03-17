<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.-->

    <?php
        /*echo "<table border=1";
        echo "<tr><th>Castellano</th><th>Inglés</th></tr>";
        echo "<tr><td>Casa</td><td>House</td></tr>";
        echo "<tr><td>Teclado</td><td>Keyboard</td></tr>";     
        echo "<tr><td>Casa</td><td>House</td></tr>";     
        echo "<tr><td>Casa</td><td>House</td></tr>";     
        echo "<tr><td>Casa</td><td>House</td></tr>";     
        echo "<tr><td>Casa</td><td>House</td></tr>";
        echo "<tr><td>Casa</td><td>House</td></tr>";
        echo "<tr><td>Casa</td><td>House</td></tr>";
        echo "<tr><td>Casa</td><td>House</td></tr>";
        echo "<tr><td>Casa</td><td>House</td></tr>";
        
        echo "</table";
        */


        $palabra = array(
            'Casa' => array('House'),
            'Hola' => array('Hello'),
            'Mascota' => array('Pet'),
            'Pendiente' => array('Earings'),
            'Fin' => array('End'),
            'Amo' => array('Master')
        );
    
        echo "<table border = 1>";
        echo "<tr><th>CASTELLANO</th><th>INGLÉS</th></tr>";

        foreach ($palabra as $p => $word) {
            echo "<tr>"."<td>".$p."</td>";
            foreach ($word as $w) {
                echo "<td>".$w."</td>";
            }
            "</tr>";
        }


        echo "</table>";
    ?>

</body>
</html>