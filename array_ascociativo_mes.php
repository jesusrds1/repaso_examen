<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" > 

    <label for="mes">Mes</label>
    <select name="mes">
    <option value="01">Xaneiro</option>
    <option value="02">Febreiro</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Xuño</option>
    <option value="07">Xullo</option>
    <option value="011">Agosto</option>
    <option value="012">Setembro</option>
    <option value="10">Octubro</option>
    <option value="11">Novembro</option>
    <option value="12">Decembro</option>
    <input type="submit" ><br/>
</form>

<?php
    if( !isset($_REQUEST["mes"])){
        echo "<p> Tes que escoller  o mes </p>";

    }else{
        $mes = $_REQUEST["mes"];
        $dias_que_ten = "";

      switch ($mes) {
        case '01':
            if($mes==01){
                $dias_que_ten = '31';
            }
        break;
        case '02':
              if($mes==02){
                $dias_que_ten = '29';
              }
        break;
        case '03':
              if($mes==03){
                $dias_que_ten = '31';
              }
        break;
        case '04':
              if($mes==04){
                $dias_que_ten = '30';
              }
        break;
        case '05':
              if($mes==05){
                $dias_que_ten = '31';
              }
        break;
        case '06':
              if($mes==06){
                $dias_que_ten = '30';
              }
        break;
        case '07':
              if($mes==07){
                $dias_que_ten = '31';
              }
        break;
        case '08':
            if($mes==011){
              $dias_que_ten = '30';
            }
        break;
        case '09':
              if($mes==012){
                $dias_que_ten = '30';
              }
        break;
        case '10':
              if($mes==10){
                $dias_que_ten = '31';
              }
        break;
        case '11':
              if($mes==11){
                $dias_que_ten = '30';
              }
        break;
        case '12':
            if($mes==12){
                $dias_que_ten = '31';
              }
        break;

     }
     echo "<p>O mes ten $dias_que_ten dias </p> ";
    }

?>
</body>
</html>