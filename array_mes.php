<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $horario= array(
            '8:50 - 9:40' => array('IAW','SAD','ASXBD','ASXBD','IAW'),
            '9:40 - 10:30' => array('IAW','SAD','EIE','ASXBD','SRI'),
            '10:30 - 11:20' => array('SRI','SAD','EIE','EIE','SRI'),
            '11:20 - 12:00' => array('RECREO'),
            '12:00 - 12:50' => array('SRI','ASO','ASO','IAW','SAD'),
            '12:50 - 13:40' => array('ASO','ASO','IAW','IAW','SAD'),
            '13:40 - 14:30' => array('ASXBD','ASO','IAW','SRI','SAD'),
            '14:30 - 16:00' => array('MEDIODÍA'),
            '16:00 - 16:50' => array('','SRI','','ASO',''),
            '16:50 - 17:40' => array('','SRI','','ASO',''),
            '17:40 - 18:30' => array('','SRI','','ASO','')  
        );
    
        /*Recorrer los arrays y crear la tabla con su contenido*/
        echo "<table border=1>";
        echo "<tr><th></th><th>LUNS</th><th>MARTES</th><th>MÉRCORES</th><th>XOVES</th><th>VENRES</th></tr>";

        //Recorro el array con las horas
        foreach ($horario as $hora => $modulos) {
            //Y se va imprimiendo una a una
            echo "<tr><td>".$hora."</td>";
            //Por cada una de las horas recorro cada uno de los módulos
            foreach ($modulos as $m) {
            //Si alguno de los módulos tiene un único valor
                if(count($modulos)==1){
            //Imprima el módulo e incluimos estilo en el td para que aparezca en el medio
                    echo "<td colspan='5' style='text-align: center'>".$m."</td>";
                }else{
            //Si hay más de un módulo en el array con los módulos lo imprime sin mas
                    echo "<td>".$m."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    
    ?>






</body>
</html>