<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conversor</h1>
<form action= "<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
    Introduce cuantos euros quieres cambiar :<input type="text" name="euros">
    <input type="submit" value="Pesetas" name="pesetas"/>
    <input type="submit" value="Rublos" name="rublos"/>
    <input type="submit" value="Dolares" name="dolares"/>
    <input type="submit" value="Yens" name="yens"/>
    </form>
<?php

     $euro = $_POST['euros'];
       $pesetas=($_REQUEST['euros'])*166;
       $rublos=($_REQUEST['euros'])*144;
       $dolares=($_REQUEST['euros'])*number_format(1.10, 3);
       $yenes=($_REQUEST['euros'])*(130.70);

    if (!isset($_REQUEST['euros'])) {
    echo "introduce algún número";
}elseif (filter_var($_REQUEST['euros'],FILTER_VALIDATE_INT)) {
    if ($_REQUEST['pesetas']) {
    echo "$euro son $pesetas pesetas "."</br>";
    }elseif ($_REQUEST['rublos']) {
    echo "$euro son $rublos rublos "."</br>";
    }elseif ($_REQUEST['dolares']){
    echo "$euro son $dolares dolares "."</br>";
    }elseif ($_REQUEST['yens']) {
    echo "$euro son $yenes yens"."</br>";
}
}else {
    echo "introduce un numero!";
 }
?>
</body>
</html>