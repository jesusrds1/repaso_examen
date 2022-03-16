<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 21</title>
    </head>
    <body>
        <h3>Ejercicio 21</h3>
        <p>PROGRAMA QUE CALCULA NOTAS DE ALUMNOS</p>

        <?php
            if (isset($_REQUEST["reiniciar"])) {
                $NumeroNotas=0;
                $SumaNotas=0;
                $MediaNotas=0;
                $impares=0;
                $max_par=0;
            }

            $SumaNotas=$_REQUEST["SumaNotas"];
            $NumeroNotas=$_REQUEST["NumeroNotas"];
            $par=$_REQUEST["par"];
            $impares=$_REQUEST["impares"];
            $max_par=$_REQUEST["max_par"];

            if (isset($_REQUEST["num"]) && is_numeric($_REQUEST["num"]) && $_REQUEST["num"] >= 0) {
                $NumeroNotas=intval(isset($_REQUEST["NumeroNotas"])?$_REQUEST["NumeroNotas"]+1:0);
                if ($_REQUEST["num"] % 2 == 0) {
                    $MediaNotas = $_REQUEST["num"];
                    if (($par % 2 == 0) && ($par > $max_par)) {
                        $max_par = intval(isset($_REQUEST["max_par"])?$par:0);
                    }
                } else {
                    $impares=intval(isset($_REQUEST["impares"])?$_REQUEST["impares"]+1:0);
                    $SumaNotas=intval(isset($_REQUEST["SumaNotas"])?$_REQUEST["SumaNotas"]+intval(isset($_REQUEST["SumaNotas"])?$_REQUEST["SumaNotas"]:0):0);
                }
            }

            if (isset($_REQUEST["num"]) && $_REQUEST["num"] < 0) {
        ?>
             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <input type="submit" value="Reiniciar">
            </form>

        <?php
                $MediaNotas = $SumaNotas / $NumeroNotas; 
                echo "<p>Números introducidos: $NumeroNotas</p>";
                echo "<p>A media das notas é de $MediaNotas</p>";
                echo "<p>O mayor dos pares é $max_par</p>";
            } else {
        ?>
                 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <p><input type="text" name="num"></p>
                    <p><input type="hidden" name="SumaNotas" value="<?php echo $SumaNotas?>"></p>
                    <p><input type="hidden" name="NumeroNotas" value="<?php echo $NumeroNotas?>"></p>
                    <p><input type="hidden" name="pares" value="<?php echo $pares?>"></p>
                    <p><input type="hidden" name="impares" value="<?php echo $impares?>"></p>
                    <p><input type="hidden" name="max_par" value="<?php echo $max_par?>"></p>
                    <p><input type="submit" value="Enviar"></p>
                </form>
        <?php
                echo "<p>Suma: $SumaNotas</p>";
                echo "<p>Números de notas introducidas: $NumeroNotas</p>";
                echo "<p>Números pares: ".$pares."</p>";
                echo "<p>Números impares: ".$impares."</p>";
                echo "<p>Par máximo: ".$max_par."</p>";
            }
        ?>
    </body>
</html>